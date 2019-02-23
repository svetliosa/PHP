<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
        <p>Моля въведете името си:</p><br>
        <input type="text" name="name"/><br><br>
        <input type="text" name="age"/><br><br>
        <input type="submit"/><br><br>
        </form>
        <?php
        if ((isset($_GET['name']))&&(isset($_GET['age']))){
            echo 'Здравейте, '.$_GET['name'] .'! Вие сте на '.$_GET['age']. ' години.';
        }
        ?>
    </body>
</html>
