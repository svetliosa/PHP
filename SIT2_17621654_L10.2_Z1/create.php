<?php
$host='localhost';
$dbUser='root';
if(!$dbConn=mysqli_connect($host,$dbUser)){
die('Не може да се осъществи връзка със сървара');}
$sql='CREATE Database info_books';
if($queryResource = mysqli_query($dbConn, $sql)){
echo 'Базата данни е създадена !';}
else {"Бaзата данни не е създадена!";}

?>

