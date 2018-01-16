<?php 
/*
/*
Grupp 5 - Invictus Watches 
Management med IT
Webbprogrammeringens grunder
Södetörns Högskola 
2016-01-12
Se till att länka rätt här (require_once ska det vara. ). 
Skriv rätt filväg/sökväg sådan att den här filen hittar rätt.

*/
require_once "db_connect.php";
require_once "products.php";
//Funktionen skriver ut rapport summary. Den skriver också ut tabellen. 
function rapport_pris() {
         if($mysqli = connect_db()) {
//error_reporting(E_ALL); ini_set('display_errors','1');
	$sql = 'SELECT * FROM `ordern` WHERE 1';// Hämta antalet produkter sålda. 
	$result = $mysqli->query($sql);
	$stats = array();
 	print_r($mysqli->error);

 	while($row = $result->fetch_array()) {

 		$bestallt = $row['bestallt'];
        $productidn = explode(",", $bestallt);
 		foreach ($productidn as $key => $value) {

 			$stats[get_product_name($value)]++;  // vi räknar en kula som såld
			//$stats[]++;
			
 		}
 	}
             //Lagrar de i array:s. 
		$data = array();
        
	foreach ($stats as $key => $value) {
        
		array_push($data, $value);
 		array_push($labels, $key);
	   }
             /*'echo "Produktnamn och antalet sålda produkter: ";
             echo "<pre>";
             echo "<br>";
        print_r ($data);
             echo "</pre>";*/
             
             
             //SKRIV UT NAMNEN PÅ VARORNA. 
    $sql = 'SELECT * FROM `produkt` WHERE 1';
	$result = $mysqli->query($sql);
	$stats = array();
 	print_r($mysqli->error);

 	while($row = $result->fetch_array()) {

 		$bestallt = $row['namn'];
 		foreach ($row as $key => $value) {

 			$stats[$bestallt]++;// get_product_price[] är ny funktion i products.php.  
			
 		}
 	}
		$data3 = array();//lagrar data från databasen i en array. 
        
	foreach ($stats as $key => $value) {
        
 		array_push($data3, $key);
	   }
       /* echo "Produkternamn: ";
        echo "<pre>";
        print_r ($data3);
        echo "</pre>"; */
             
             //BERÄKNAR HUR MYCKET MAN HAR SÅLT AV EN PRODUKTER!!!!
             
             //Hämtar priser från databasen. 
             //Vi vill hämta priset, därför ska vi nå info från tabellen: produkter. 
	$sql = 'SELECT * FROM `produkt`';
	$result = $mysqli->query($sql);
	$stats = array();
 	print_r($mysqli->error);

 	while($row = $result->fetch_array()) {

 		$bestallt = $row['price'];
 		foreach ($row as $key => $value) {

 			$stats[get_product_price($bestallt)]++;// get_product_price[] är ny funktion i products.php.  
			
 		}
 	}
		$data2 = array();//lagrar data från databasen i en array. 
        
	foreach ($stats as $key => $value) {
        
 		array_push($data2, $key);
	   }
        //Skriver ut array:n. 
       /* echo "Produkterna priser: ";
        echo "<pre>";
        print_r ($data2);
        echo "</pre>"; */
             
             //Multiplicerar varje värde för sig i vardera array, 0 och 0 osv. 
             $a =array();
             for($i=0; $i<count($data); $i++){
                $a[]=$data2[$i] * $data[$i];
             }
             
             //Skriver ut array:n. 
            /* echo "Total summan av sålda produkter:";
             echo "<pre>";
             print_r ($a);
             echo "</pre>";*/
             
            echo "<table>";
            echo "<th>Product name</th>";
            echo "<th>Total price (€)</th>";
            for($x=0; $x<count($data3) ;$x++){
                echo "<tr>";
             for($l=0; $l<1;$l++){
                 $c = $l*(count($data3)) +$x ;
                 echo "<td>".$data3[$c]."</td>";
                 echo "<td>".$a[$c]."</td>";
             }
            }echo "</tr>";
            echo "</table>";

             
             //Skriver in värden i en tabellfil. Den heter db_info.tsv. 
             // Skriv ut ett felmeddelande om filen inte går att läsa samt avsluta.
		$fil= fopen("rapporter/tmp/db_info.tsv", "w");

		if(!$fil) die ("Filen kan ej öppnas");

		fwrite($fil, "labels");
		fwrite($fil, "\t");
		fwrite($fil, "pris\n");


		for($i=0;$i<count($data3); $i++) {
			fwrite($fil, $data3[$i]);
			fwrite($fil, "\t");
			fwrite($fil, $a[$i]."\n");
		}
			
		fclose($fil);
    }
}

?>