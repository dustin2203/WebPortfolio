<?php
//Website Components
$head_import = require_once('./components/head.inc.html');
$navbar = require_once('./components/navbar.inc.html');
require_once('./system/classes/Classes.inc.php');
include_once('./system/mysql_settings.inc.php');

?>

<!doctype html>
<html lang="de">
<head>
    <title>Portfolio</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <? $head_import; ?>
    <script>
        $(document).ready(function(){
            $("body").fadeTo(2500, 1);
        });
    </script>
</head>
<body>

<? $navbar; ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./images/slider1.png" class="d-block w-100" alt="./images/slider1.png">
        </div>
        <div class="carousel-item">
            <img src="./images/slider2.png" class="d-block w-100" alt="./images/slider2.png">
        </div>
        <div class="carousel-item">
            <img src="./images/slider3.png" class="d-block w-100" alt="./images/slider3.png">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container" id="content_history">
    <h1>Meine Leistungen</h1>

    <?php

$mysql_handler = new CustomMysql();
$mysql_handler->connect($mysql_host, $mysql_username, $mysql_password, $mysql_database);



    foreach ( $mysql_handler->fetch_data(["title", "content", "year"], "main_content",  "ORDER BY year DESC")  as $row ) {
        echo "<div class='row'>
        <div class='col-9' id='content_history_left'>
            <div id='co'

            <div class='media'>
                <div class='media-body'>
                    <h3 class='mt-0 mb-1'>" . $row['title'] . "</h3>
                    " . $row['content'] . "
      
                </div>
            </div>
        </div>
        <div class='col-3' id='content_history_right'>
           / " . $row['year'] . " 
        </div>
    </div>";
    }
#ok



    ?>
</div>

</body>
</html>