<?php
/*
Invictus watches 
2016-01-10 
Skriv rätt filväg/sökväg sådan att den här filen hittar rätt.
*/
require_once "db_connect.php";
require_once "products.php";

function uppdatera_data() {
if($mysqli = connect_db()) {
//error_reporting(E_ALL); ini_set('display_errors','1');
	$sql = 'SELECT * FROM `ordern` WHERE 1';
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

		$data = array();
		$labels = array();
        
	foreach ($stats as $key => $value) {
        
		array_push($data, $value);
 		array_push($labels, $key);
	} 	

 	

        
		// Skriv ut ett felmeddelande om filen inte går att läsa samt avsluta.
		$fil= fopen("admin - rapporter/tmp/forsaljningsdata.tsv", "w");

		if(!$fil) die ("Filen kan ej öppnas");

		fwrite($fil, "labels");
		fwrite($fil, "\t");
		fwrite($fil, "antal\n");


		for($i=0;$i<count($labels); $i++) {
			fwrite($fil, $labels[$i]);
			fwrite($fil, "\t");
			fwrite($fil, $data[$i]."\n");
		}
			
		fclose($fil);
     
	}
}
function table(){
 if($mysqli = connect_db()) {

	$sql = 'SELECT * FROM `ordern` WHERE 1';
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

		$data = array();
		$labels = array();
        
	foreach ($stats as $key => $value) {
        
		array_push($data, $value);
 		array_push($labels, $key);
	   }
     
            //Min KOD
            echo "<table>";
            echo "<th>Produktnamn</th>";
            echo "<th>Antal sålda</th>";
            for($x=0; $x<count($labels) ;$x++){
                echo "<tr>";
             for($l=0; $l<1;$l++){
                 $c = $l*(count($labels)) +$x ;
                 echo "<td>".$labels[$c]."</td>";
                 echo "<td>".$data[$c]."</td>";
             }
            }echo "</tr>";
            
            echo "</table>";

            //MIN KOD  
    }
}
/*
function rapport_pris() {
         if($mysqli = connect_db()) {
//error_reporting(E_ALL); ini_set('display_errors','1');
	$sql = 'SELECT * FROM `order` WHERE 1';
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
		$data = array();
		$labels = array();
        
	foreach ($stats as $key => $value) {
        
		array_push($data, $value);
 		array_push($labels, $key);
	   }
             echo "<pre>";
             echo "<br>";
        print_r ($data);
            print_r ($labels);
             echo "</pre>";
             
             //BERÄKNA SUMMAN AV ANTALET!!!!
             
	$sql = 'SELECT * FROM `produkter` WHERE 1';
	$result = $mysqli->query($sql);
	$stats = array();
 	print_r($mysqli->error);

 	while($row = $result->fetch_array()) {

 		$bestallt = $row['pris'];
        
 		foreach ($row as $key => $value) {

 			$stats[get_product_price($value)]++;  // vi räknar en kula som såld
			//$stats[]++;
			
 		}
 	}
		$data2 = array();
        
	foreach ($stats as $key => $value) {
        
 		array_push($data2, $key);
	   }
             
        echo "<pre>";

        print_r ($data2);
        echo "</pre>"; 
             
             $a =array();
             for($i=0; $i<count($data); $i++){
                $a[]=$data2[$i] * $data[$i];
             }
             print_r ($a);
             
             // Skriv ut ett felmeddelande om filen inte går att läsa samt avsluta.
		$fil= fopen("tmp/db_info.tsv", "w");

		if(!$fil) die ("Filen kan ej öppnas");

		fwrite($fil, "labels");
		fwrite($fil, "\t");
		fwrite($fil, "Pris(total)\n");


		for($i=0;$i<count($labels); $i++) {
			fwrite($fil, $labels[$i]);
			fwrite($fil, "\t");
			fwrite($fil, $a[$i]."\n");
		}
			
		fclose($fil);
    }
}
*/



?>