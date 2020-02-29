<?php
session_start();
?>

<html>
<head>
    <?php require_once('../components/head.inc.html'); ?>
</head>
<body>
<?php require_once('../components/navbar.inc.html'); ?>
<div class="container-fluid" id="content">
    <h1>Project Changelog</h1>
    <div class="container" id="content_insert_change">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Version*</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="V 1.0" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Changes*</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                          placeholder="Please fill in with <br> tags" required></textarea>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Insert">
        </form>
    </div>
    <hr>
    <table>
        <tr>
            <th>Version</th>
            <th>Changes</th>
            <th>Developer</th>
        </tr>
        <tr>
            <td>V.0.0</td>
            <td>Project startet <br/>
                -jkdjdjd <br>
                -akjsjdjd<br>
                -jdjsdjsaka
            </td>
            <td>Dustin W.</td>
        </tr>
        <tr>
            <td>V.0.1</td>
            <td>-jkdjdjd<br>
                -jdjdjdjd<br>
                -kdiejdkmie<br>
                -iuehdue<br>
                -iedjmdice
            </td>
            <td>Dustin W.</td>
        </tr>
        <tr>
            <td>V.0.2</td>
            <td>-dierirfir<br>
                -ows,wos,<br>
                -ikefjmierf<br>
                -iefjdie
            </td>
            <td>Dustin W.</td>
        </tr>
    </table>
</div>
</body>


</html>


