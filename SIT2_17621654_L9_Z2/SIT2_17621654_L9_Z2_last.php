<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        setcookie("user", "", time() - 3600);
        
        if(isset($_COOKIE['user'])) {
            echo "Welcome " . $_COOKIE["user"] ."!";
        } else {
            echo "Welcome, guest!";
        }
        echo "<br> All cookies: <br>";
        print_r($_COOKIE);
        
        ?>
    </body>
</html>
