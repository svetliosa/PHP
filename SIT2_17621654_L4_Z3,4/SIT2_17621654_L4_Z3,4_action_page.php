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
        <?php
        if (isset($_POST['submit'])) {
             $city=$_POST["city"];
             $month=$_POST["month"];
             $year=$_POST["year"];
            $info=array($city,$month,$year);
            if(!empty($_POST['weather'])&&!empty($_POST['city'])&&!empty($_POST['month'])&&!empty($_POST['year'])){
                $weather = $_POST['weather'];
                echo "In ".$city." in the month of ".$month." ".$year." you observed the following weather: ";
            echo "<ul>";
                foreach ($weather as $weather=>$value){ 
             echo "<li>".$value."</li><br>";
                }
             echo "</ul>";
        }
        else
             echo "Please fill the form <br>";
    }
    ?>
    </body>
</html>
