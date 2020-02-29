<html>
<head>
    <title>Portfolio - Setup</title>
    <?php require_once('../../components/head.inc.html'); ?>
</head>
<body>
<div class="container" id="content_buttons">
    <h1>Portfolio Setup</h1>
    <div class="container" id="content_button_install">
        <div class="card">
            <div class="card-header">
                Installation
            </div>
            <div class="card-body">
                <h5 class="card-title">Installation</h5>
                <p class="card-text">Durch das Installieren der Portfolio Software, werden alle Tabellen innerhalb ihrer
                    angegebenen Datenbank automatisiert erstellt. Und die Software wird anschließend fuer sie im vollen
                    Umfang nutzbar sein.<br>
                    Info: Hierbei handelt sich es sich um die erstmalige Installation. Sollten sich die Software bereits
                    installiert haben, sollten sie lieber eine Neuinstallation in Betracht ziehen oder gegebenenfalls
                    eine Reparatur durchfuehren.</p>
                <form action="" method="get">
                    <input type="submit" class="btn btn-primary" value="Installieren" name="action">
                </form>
            </div>
        </div>
    </div>
    <div class="cotainer" id="content_button_extra">
        <div class="row" id="button_row">
            <div class="col-sm-4">
                <p>Achtung: Bei einer Neuinstallation des Systems gehen alle ihre Daten verloren. Bitte stellen sie
                    sicher, dass die besonders die Daten in ihrer bisher genutzten Datenbank gesichert haben!</p>
                <form action="" method="get">
                    <input type="submit" class="btn btn-danger" value="Neuinstallation" name="action">
                </form>
            </div>
            <div class="col-sm-4">
                <form action="" method="get">
                    <input type="submit" class="btn btn-warning" value="Reparieren" name="action">
                </form>
            </div>
            <div class="col-sm-4">
                <form action="" method="get">
                    <input type="submit" class="btn btn-info" value="Deaktivieren" name="action">
                </form>

            </div>
        </div>
    </div>
    <button type="button" class="btn btn-secondary">Abbrechen</button>
</div>

</body>
</html>


<?php
