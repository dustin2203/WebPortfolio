<?php
//Website Components
$head_import = require('./components/head_import.html');
$navbar = require('./components/navbar.html');

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

    <div class="row">
        <div class="col-9" id="content_history_left">
            <div id="co"

            <div class="media">
                <div class="media-body">
                    <h3 class="mt-0 mb-1">Media object</h3>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                    purus
                    odio,
                    vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                    fringilla.
                    Donec
                    lacinia congue felis in faucibus.
                </div>
            </div>
        </div>
        <div class="col-3" id="content_history_right">
           / 2012
        </div>
    </div>
    <div class="row">
        <div class="col-9" id="content_history_left">
            <div id="co"

            <div class="media">
                <div class="media-body">
                    <h3 class="mt-0 mb-1">Media object</h3>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                    purus
                    odio,
                    vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                    fringilla.
                    Donec
                    lacinia congue felis in faucibus.
                </div>
            </div>
        </div>
        <div class="col-3" id="content_history_right">
            / 2013
        </div>
    </div>
    <div class="row">
        <div class="col-9" id="content_history_left">
            <div id="co"

            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">Media object</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                    purus
                    odio,
                    vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                    fringilla.
                    Donec
                    lacinia congue felis in faucibus.
                </div>
            </div>
        </div>
        <div class="col-3" id="content_history_right">
            / 2014
        </div>
    </div>
</div>

</body>
</html>