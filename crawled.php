<?php 
include ("classes/DomDocumentParser.php");
function folloeLinks($url) {
    $parser = new DomDocumentParser($url); // call class
}
$url = "https://www.udemy.com/";
folloeLinks($url);
?>