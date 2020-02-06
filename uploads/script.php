<!-- Die Encoding-Art enctype MUSS wie dargestellt angegeben werden -->
<form enctype="multipart/form-data" action="<?php getcwd(); ?>" method="POST">
    <!-- MAX_FILE_SIZE muss vor dem Dateiupload Input Feld stehen -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
    <!-- Der Name des Input Felds bestimmt den Namen im $_FILES Array -->
    Diese Datei hochladen: <input name="userfile" type="file"/>
    <input type="submit" value="Send File"/>
</form>


<?php
// In PHP kleiner als 4.1.0 sollten Sie $HTTP_POST_FILES anstatt
// $_FILES verwenden.

$uploaddir = getcwd();



if (isset($_FILES['userfile']['tmp_name'])) {

    echo $uploaddir;
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "Datei ist valide und wurde erfolgreich hochgeladen.\n";
        echo $_FILES['userfile']['error'];
    } else {
        echo "Möglicherweise eine Dateiupload-Attacke!\n";
        echo $_FILES['userfile']['error'];
    }


    echo 'Weitere Debugging Informationen:';
    print_r($_FILES);

    print "</pre>";
}

