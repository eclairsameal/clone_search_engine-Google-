<?php
    if(isset($_GET['term'])){
        $term = $_GET['term'];
    }else{
        exit("You must enter a search term");
    } 
    
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
                    <li>
                        <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
                            Sites
                        </a>
                    </li>
                    <li>
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