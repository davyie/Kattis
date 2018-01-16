<?php
/*
Titta här. 
Funktionen product_entry(HTML) tar vi från Kevins. 
*/
include_once "db_connect.php";

function get_product_name($id) {
$out = "";

if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM produkter WHERE id='".$id."'";
 	$result = $mysqli->query($sql);
 	print_r($mysqli->error);
 	while($row = $result->fetch_array()) {
 		//print_r($row);
 		$out .= $row['produktnamn'];
 	}
 } 

return $out;
}
//Denna funktion ställer upp en mall för de nedanstående funktioner. 
function product_entry($ar, $class='info') {//Skriver ut produkter på hemsidan. 

	return "
    <section id='produkt'>
    <article>
        <img src='" . $ar['Produktbild'] . "'></a>
    </article>
    <div>
    <ul>
    <li class='" .$class."'><p>Name: " .$ar['namn']. "</p></li>
    <li class='" .$class."'><p>Type: " .$ar['Type']. "</p></li>
    <li class='" .$class."'><p>Description: " .$ar['beskrivning']. "</p></li>
    <li class='" .$class."'><p>Case size: " .$ar['size']. "</p></li>   
    <li class='" .$class."'><p>Strap width: " .$ar['width']. "</p></li>
    <li class='" .$class."'><p>Price: " .$ar['price']. "</p></li>
    </ul>
    </div>
    <form method=POST action='".htmlentities($_SERVER['PHP_SELF'])."'><input type=submit value='Add to Cart'/><input name='tillkundkorgen' type=hidden value='".$ar['Produktid']."'/></form>
	</div>
    </section>
    ";
}
//Tre funktioner printar ut varorna. 
function get_products_classic() {

$out = "";

if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM PRODUKT WHERE type='Classic'";
 	$result = $mysqli->query($sql);
 	//print_r($mysqli->error);
 	while($row = $result->fetch_array()) {
 		//print_r($row);
 		$out .= product_entry($row);
 	}
 } 

return $out;

}
function get_products_exclusive() {

$out = "";

if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM PRODUKT WHERE type='Exclusive'";
 	$result = $mysqli->query($sql);
 	//print_r($mysqli->error);
 	while($row = $result->fetch_array()) {
 		//print_r($row);
 		$out .= product_entry($row);
 	}
 } 

return $out;

}
function get_products_sport() {

$out = "";

if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM PRODUKT WHERE type='Sport'";
 	$result = $mysqli->query($sql);
 	//print_r($mysqli->error);
 	while($row = $result->fetch_array()) {
 		//print_r($row);
 		$out .= product_entry($row);
 	}
 } 

return $out;

}

function get_offer_products() {

$out = "";

if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM produkter WHERE isonoffer='offer'";
 	$result = $mysqli->query($sql);
 	//print_r($mysqli->error);
 	while($row = $result->fetch_array()) {
 		//print_r($row);
 		$out .= product_entry($row, "specialoffer");
 	}
 } 

return $out;

}

function get_product_price($id) {
$out = "";

if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM produkter WHERE pris='".$id."'";
 	$result = $mysqli->query($sql);
 	print_r($mysqli->error);
 	while($row = $result->fetch_array()) {
 		//print_r($row);
 		$out .= $row['pris'];
 	}
 } 

return $out;
}

?>