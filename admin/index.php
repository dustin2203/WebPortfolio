<?php
session_start();
require_once '../system/classes/session.php';
$session_handler = new Session;
$session_handler->check_if_login_session_set("logged_in", true, "login.php");
?>
<!doctype html>
<html lang="de">
<head>
    <?php
    require_once("./components/header_import.html");
    require_once("./components/navbar.html");
    ?>
    <title>Admin Panel</title>
</head>

<body>
<div class="container" id="content_heading">
    <h1>Herzlich Willkommen <?php echo $_SESSION['username']; ?> !</h1>
</div>
<div class="container-fluid" id="content_stats">
    <h2>Statistiken</h2>
    <div class="row">
        <div class="col-sm">
            <div class="list-group" id="content_stats_left">
                <button type="button" class="list-group-item list-group-item-action active" disabled>
                    Benutzerstatistiken
                </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Anmeldungen:</button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Anzahl Benutzerkonten:
                </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Anzahl Benutzerkonten mit
                    ZB:
                </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Neustes Konto:
                </button>
            </div>
        </div>
        <div class="col-sm">
            <div class="jumbotron jumbotron-fluid" id="content_login_informations">
                <div class="container">
                    <h1 class="display-4">Anmeldeinformationen</h1>
                    <p>Benutzername: <?php echo $_SESSION['username']; ?>
                    </p>
                    <p>Email: <?php echo $_SESSION['email']; ?>
                    </p>
                    <p>Account erstellt: <?php echo $_SESSION['created_at']; ?>
                    </p>
                    <p>Account geupdated: <?php echo $_SESSION['updated_at']; ?>
                    </p>
                    <p>Rechtegruppe: <?php echo $_SESSION['perm_group']; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="list-group" id="content_stats_right">
                <button type="button" class="list-group-item list-group-item-action active" disabled>
                    Medienstatistiken
                </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Anzahl
                    Leistungsbeiträge:
                </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Ältester Beitrag:</button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Anzahl Elemente im
                    Downloadbereich:
                </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Größe der Elemente im
                    Downloadbereich:
                </button>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container-fluid" id="content_news">
    <h2>News</h2>
    <!-- Flexbox container for aligning the toasts -->
    <div class="row">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

    </div>

</div>
<hr>
<div class="container" id="content_insert_achievement">
    <h2>Create a new achievement</h2>
    <form action="../system/scripts/insert_achievement_script.php" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Title*</label>
            <input type="text" class="form-control" id="exampleFormControlInput1"
                   placeholder="Bsp: 7 Jahre Studium an der HAW absolviert" name="achievement_title" required>
            <label for="exampleFormControlInput2">Year*</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Bsp: 2010"
                   name="achievement_year" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content*</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="achievement_content"
                      required></textarea>
        </div>
        <input type="submit" class="btn btn-primary btn-block" value="Erstellen">
    </form>
</div>
</body>

<?php require_once('./components/footer.html');?>

</html>
