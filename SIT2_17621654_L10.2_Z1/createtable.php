<?php

include 'config.php';

$sql = 'CREATE TABLE IF NOT EXISTS books (   
    ID INT(10) NOT NULL AUTO_INCREMENT, 
    HEADLINE VARCHAR(80) NOT NULL,
    AUTHOR VARCHAR(80) NOT NULL,
    PUBLISHER VARCHAR(80) NOT NULL,
    YEAR INT(4) NOT NULL,   
    PRIMARY KEY  (id)   ) 
';
$result = mysqli_query($dbConn, $sql);
if (!$result) {
    die('Грешка при създаване на таблицата.');
}
echo "Таблицата е създадена!";
?>

