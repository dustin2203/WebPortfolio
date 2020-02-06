<?php
session_start();
session_unset();
session_destroy();
echo "Du wurdes erfolreich ausgeloggt! <a href='http://localhost/Portfolio/index.php'>Zur Startseite!</a>";