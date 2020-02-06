<?php
session_start();
require_once '../system/classes/session.php';
$session_handler = new Session;
$session_handler->check_if_login_session_set("logged_in", true, "login.php");
print_r($_SESSION);
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
<div class="container" id="content_warning">
    <div class="alert alert-warning" role="alert">
        <strong>Beachte!</strong> Diese Version ist eine Testversion. Es kann zu groben Fehlern kommen. Wir bitten dies
        zu Entschuldigen! <a href="#" class="alert-link">Fehler melden.</a>
    </div>
</div>
<div class="container-fluid" id="content_stats">
    <h2>Statistiken</h2>
    <div class="row">
        <div class="col-sm">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" disabled>
                    Benutzerstatistiken
                </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Anmeldungen: </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Anzahl Benutzerkonten: </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Anzahl Benutzerkonten mit ZB: </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Neustes Konto:
                </button>
            </div>
        </div>
        <div class="col-sm">
            <div class="jumbotron jumbotron-fluid">
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
                    <p>Rechtegruppe: <?php echo $_SESSION['perm_group'];?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" disabled>
                    Medienstatistiken
                </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Anzahl Leistungsbeiträge: </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Ältester Beitrag: </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Anzahl Elemente im Downloadbereich: </button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Größe der Elemente im Downloadbereich:
                </button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="content_news">
    <h2>News</h2>
    <!-- Flexbox container for aligning the toasts -->
    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">

        <!-- Then put toasts within -->
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>

</div>
<div class="container" id="content_insert_achievement">
    <h2>Neue Leistung erstellen</h2>
    <form action="../system/scripts/insert_achievement_script.php" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Titel</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Bsp: 7 Jahre Studium an der HAW absolviert" name="achievement_title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Inhalt</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="achievement_content"></textarea>
        </div>
        <input type="submit" class="btn btn-primary btn-block" value="Erstellen">
    </form>
</div>
</body>


</html>
