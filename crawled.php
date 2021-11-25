<?php 
include ("classes/DomDocumentParser.php");
function folloeLinks($url) {
    $parser = new DomDocumentParser($url);
}
$url = "https://www.udemy.com/";
folloeLinks($url);
?>