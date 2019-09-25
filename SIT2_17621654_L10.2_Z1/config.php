<?php
$host = 'localhost';
$dbUser = 'root';
$dbName = 'info_books';
$dbConn = mysqli_connect($host, $dbUser, '');
if (!$dbConn)
{
die('Не може да се осъществи връзка със сървъра.');
}
if (!mysqli_select_db($dbConn,$dbName))
{
die('Не може да се селектира базата от данни.');
}
?>