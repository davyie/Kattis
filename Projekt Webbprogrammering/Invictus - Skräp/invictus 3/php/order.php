<?php

include_once "db_connect.php";
function get_order($orderid) {
		$productidn = "";
		if($mysqli = connect_db()) {
			$sql = "SELECT `bestallt` FROM `ordern` WHERE ordernr='".$orderid."'";
			$result = $mysqli->query($sql);
			//print_r($sql);
			//print_r("<br>");
			//print_r($mysqli->error);
			while($row = $result->fetch_array()) {
			//	print_r($row);
					$productidn = $row['bestallt'];
	 		}
	 		//print_r($productidn);
			//print_r("<br>");
		 	$orderrader = explode(",", $productidn);
		 	$out ="";
		 	foreach ($orderrader as $key => $value) {
		 		$out .= get_product($value);
		 	}

		}
		return "<table class=ordern>".$out."</table>";
}

function get_product($id) {//Hämtar alla produkter från databasen. 

$out = "";

if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM produkt WHERE Produktid = '".$id."'"; 
	
 	$result = $mysqli->query($sql);
 	//print_r($sql);
	//print_r("<br>");
 	//print_r($mysqli->error);

 	while($row = $result->fetch_array()) {
 		//print_r($row);
 		$out .= product_row($row);
 	}
 }
return $out;

} 

 function product_row($ar) {

	return "<tr>".
	"<td><strong>Name: </strong>".$ar['namn']."</td>"  
	. "<td><strong>Type: </strong>" .$ar['Type']."</td>" 
	. "<td><strong>Price: </strong>" .$ar['price']."</td>" 	
	."</tr>";



}

function lagg_in_order($kundid) {
	if(isset($_SESSION['kundkorg'])) {
				
				$produkt_idn = array();
				date_default_timezone_set('Europe/Stockholm');
				$ordernr = date("Ymd-His"); //vi gör ett ordernummer av en tidsstämpel... inte snyggt, men funkar
				$ordersumma = 0;
				
				foreach ($_SESSION['kundkorg'] as $key => $value) {
				  array_push($produkt_idn, $value['Produktid']);
				}
				//print_r($produkt_idn);
				$orderrader = 1;
				foreach ($produkt_idn as $key => $produkt_id) {
					$orderrader++;
				if($mysqli = connect_db()) {
				 	$sql = "SELECT * FROM produkt WHERE Produktid='".$produkt_id."'";
				 	$result = $mysqli->query($sql);
				 	//print_r($mysqli->error);
				 		while($row = $result->fetch_array()) {
				 			$ordersumma = $ordersumma + $row['price'];
	 					}
	 				}
	 			}

	 			if($mysqli = connect_db()) {

	 				$sql = "INSERT INTO `ordern`(`ordernr`, `kundid`, `bestallt`, `summa`) 
					VALUES ("
						."'".$ordernr."',"
	 					."".$kundid."," 
	 					."'".implode(",", $produkt_idn)."'," 
	 					."".$ordersumma."" 
	 					.")";
		 		
					$result = $mysqli->query($sql);
					//print_r($mysqli->error);

				 }

	 			
	 			//rensa upp
	 			unset($_SESSION['kundkorg']);
			}
			return $ordernr;
	}

?>