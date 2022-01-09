<?php 
class DomDocumentParser {
    private $doc;  // class 的全域變數
    public function __construct($url) {
        // 建構子()
        // echo "URL: $url";
        $options = array (
            'http'=>array('method'=>"GET", 'header'=>"User-Agent: doodleBot/0.1\n")
        ); // 'http':key ，他有個array型態的資料
        $context = stream_context_create($options);

        $this->$doc = new DomDocument();
        @$this->$doc->loadHTML(file_get_contents($url, false, $context)); // 忽略錯誤顯示
    }
}
?>

