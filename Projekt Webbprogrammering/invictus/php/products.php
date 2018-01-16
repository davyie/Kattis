<?php
/*
Grupp 5 - Invictus Watches 
Management med IT
Webbprogrammeringens grunder
Södetörns Högskola 
2016-01-08
*/
include_once "db_connect.php";
//Hämtar produkter och skriver ut dem. 
function get_product_name($id) {
$out = "";

if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM produkt WHERE Produktid='".$id."'";
 	$result = $mysqli->query($sql);
 	print_r($mysqli->error);
 	while($row = $result->fetch_array()) {
 		//print_r($row);
 		$out .= $row['namn'];
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
    <ul style='list-style-type:none'>
    <li class='" .$class."'><p><strong>Name: </strong>" .$ar['namn']. "</p></li>
    <li class='" .$class."'><p><strong>Type: </strong>" .$ar['Type']. "</p></li>
    <li class='" .$class."'><p><strong>Description: </strong>" .$ar['beskrivning']. "</p></li>
    <li class='" .$class."'><p><strong>Case size: </strong>" .$ar['size']. "</p></li>   
    <li class='" .$class."'><p><strong>Strap width: </strong>" .$ar['width']. "</p></li>
    <li class='" .$class."'><p><strong>Price: </strong>" .$ar['price']. "</p></li>
    </ul>
    </div>
    <form id='bestall' method=POST action='".htmlentities($_SERVER['PHP_SELF'])."'><input type=submit id='add'  value='Add to Cart'/><input name='tillkundkorgen' type=hidden value='".$ar['Produktid']."'/></form>
	</div>
    </section>
    ";
}
//Tre funktioner printar ut varorna. 
function get_products_classic() {

$out = "";

if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM produkt WHERE type='Classic'";
 	$result = $mysqli->query($sql);
 	print_r($mysqli->error);
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
 	$sql = "SELECT * FROM produkt WHERE type='Exclusive'";
 	$result = $mysqli->query($sql);
	//print_r($result);
 	print_r($mysqli->error);
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
 	$sql = "SELECT * FROM produkt WHERE type='Sport'";
 	$result = $mysqli->query($sql);
 	print_r($mysqli->error);
 	while($row = $result->fetch_array()) {
 		//print_r($row);
 		$out .= product_entry($row);
 	}
 } 

return $out;

}

function get_offer_products() {

$out = "";
// möjlighet till erbjudanden
if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM produkter WHERE isonoffer='offer'";
 	$result = $mysqli->query($sql);
 	print_r($mysqli->error);
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
 	$sql = "SELECT * FROM produkt WHERE price='".$id."'";
 	$result = $mysqli->query($sql);
 	print_r($mysqli->error);
 	while($row = $result->fetch_array()) {
 		//print_r($row);
 		$out .= $row['price'];
 	}
 } 

return $out;
}

?>