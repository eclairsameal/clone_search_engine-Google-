<?php 
class DomDocumentParser {
    private $doc;
    public function __construct($url) {
        // 建構子()
        // echo "URL: $url";
        $options = array (
            'http'=>array('method'=>"GET", 'header'=>"User-Agent: doodleBot/0.1\n")
        ); // 'http':key ，他有個array型態的資料
        $context = stream_context_create($options);

        $doc = new DomDocument();
        @ $doc->loadHTML(file_get_contents($url, false, $context));
    }
}
?>

