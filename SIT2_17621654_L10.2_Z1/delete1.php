<?php

include "config.php";
$sql = "DELETE FROM books WHERE PUBLISHER = 'Просвета'";
$result = mysqli_query($dbConn, $sql);
$result = mysqli_query($dbConn, "SELECT * FROM books");
echo "<table border=3>";
echo "<th colspan='5'>Налични книги</th>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Заглавие</th>";
echo "<th>Автор</th>";
echo "<th>Издателство</th>";
echo "<th>Година</th>";
echo "</tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['HEADLINE'] . "</td>";
    echo "<td>" . $row['AUTHOR'] . "</td>";
    echo "<td>" . $row['PUBLISHER'] . "</td>";
    echo "<td>" . $row['YEAR'] . "</td>";
    echo "</tr>";
}
echo "</table><br><br>";
?>
