<?php
/*
/*
Grupp 5 - Invictus Watches 
Management med IT
Webbprogrammeringens grunder
Södetörns Högskola 
2016-01-10 
funktionerna är tagna från labb 2 och 3.
*/
require_once "db_connect.php";
require_once "products.php";

//Denna funktion uppdaterar data och skriver ut det i tsv-fil. Funktion ska vara kopplad till javascript som inte funkar. 
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
		$fil= fopen("rapporter/tmp/forsaljningsdata.tsv", "w");

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
//Denna funktion skriver ut tabellen i på rapportsida. 
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
            echo "<th>Product name</th>";
            echo "<th>Sales (PCS)</th>";
            for($x=0; $x<count($labels) ;$x++){
                echo "<tr>";
             for($l=0; $l<1;$l++){
                 $c = $l*(count($labels)) +$x ;
                 echo "<td>".$labels[$c]."</td>";
                 echo "<td>".$data[$c]."</td>";
             }
            }echo "</tr>";
            
            echo "</table>";

             
    }
}




?>