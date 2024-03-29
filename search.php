<?php
    if(isset($_GET['term'])){
        $term = $_GET['term'];
    } else {  // 沒有輸入值的話
        exit("You must enter a search term");
    } 
    /*
    if(isset($_GET['type'])){
        $type = $_GET['sites'];
    } else {
        $type = "sites" ;
    }*/
    $type = isset($_GET['type']) ? $_GET['type'] : "sites";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcone to Doodle </title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="wrapper">

        <div class="header">

            <div class="headerContent">
                
                <div class="logoContainer">
                    <a href="index.html">
                        <img src="assets/images/doodleLogo.png">
                    </a>
                </div>

                <div class="searchContainer">
                    <form action="search.php" method="get">
                        <div class="searchBarContainer">
                            <input class="searchBox" type="text" name="term">
                            <button class="searchButton"> 
                                <img src="assets\images\icons\search.png">
                            </button>
                        </div>
                    </form>

                </div>

            </div>

            <div class="tabsContainer">
                <ul class="tabList">
                    <li class="<?php echo $type == 'sites' ? 'active':''?>">
                        <!--用單引號「'」是因為裡面的PHP需要用到「"」-->
                        <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
                            Sites
                        </a>
                    </li>
                    <li class="<?php echo $type == 'images' ? 'active':''?>">
                        <a href='<?php echo "search.php?term=$term&type=images"; ?>'>
                            Images
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</body>
</html>