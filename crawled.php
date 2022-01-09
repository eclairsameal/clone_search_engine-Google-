<?php 
include("classes/DomDocumentParser.php");
function folloeLinks($url) {
    $parser = new DomDocumentParser($url); // call class
}
$startUrl = "https://www.udemy.com";
folloeLinks($startUrl);
?>