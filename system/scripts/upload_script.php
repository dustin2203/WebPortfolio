<html>
<head>
    <title>File-Upload</title>
</head>
<body>
<?php

$uploads_dir = './../uploads';

if (isset($_FILES["pictures"])) {
    foreach ($_FILES["pictures"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            echo "Hochgeladen";
            $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
            // basename() kann Directory-Traversal-Angriffe verhindern;
            // weitere Validierung/Bereinigung des Dateinamens kann angebracht sein
            $name = basename($_FILES["pictures"]["name"][$key]);
            move_uploaded_file($tmp_name, " $uploads_dir/$name");
        }
    }
}

/*if(isset($_FILES['Datei'])) {
    ksort($_FILES['Datei']);
    reset($_FILES['Datei']);
    echo "<table>";
    foreach ($_FILES['Datei'] as $schluessel => $wert) {
        $wert = is_string($wert) ? htmlspecialchars($wert) : "";
        echo "<tr><td>$schluessel</td><td>$wert</td></tr>";
    }
    echo "</table>";
}*/
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="pictures">
    <input type="submit" value="Upload">
</form>
</body>
</html>



