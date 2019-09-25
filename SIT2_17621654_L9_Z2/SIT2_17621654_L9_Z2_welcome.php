<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(!isset($_COOKIE['user'])) {
            echo "Welcome, guest!";
        } else {
            echo "Welcome " . $_COOKIE["user"] ."!";
        }
        echo "<br> All cookies: <br>";
        print_r($_COOKIE);
        ?>
        <br><a href="SIT2_17621654_L9_Z2_last.php">Next page - delete cookie</a>
        
    </body>
</html>
