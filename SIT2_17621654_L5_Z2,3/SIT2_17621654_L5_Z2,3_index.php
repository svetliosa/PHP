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
        
        <form method="post" target="_blank">
            Въведете положителни стойности:<br>
            <div style="padding-bottom:20px"></div>
            A: <input type="number" name="a" min="1"><br>
            <div style="padding-bottom:10px"></div>
            B: <input type="number" name="b" min="1"><br>
            <div style="padding-bottom:10px"></div>
            C: <input type="number" name="c" min="1"><br>
        <div style="padding-bottom:10px"></div>
        <br><input type="submit" name="submit" value="Провери">
        <div style="padding-bottom:20px"></div>
        </form>
        
        <?php
        include 'SIT2_17621654_L5_Z2,3_function.php';
        if (isset($_POST['submit'])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        if ($a==0||$b==0||$c==0)
            echo "Моля въведете стойности";
        elseif(($a+$b>$c)&&($a+$c>$b)&&($b+$c>$a)){
            echo "Съществува такъв триъгълник<br>";
         echo "Лицето на триъгълника е: ".areaTriangle($a,$b,$c)." кв.см.";   
        }
        else
            echo "Не съществува такъв триъгълник";
        }  
        ?>
        
        <!-- Да се въведат два низа „Студентът Иван Иванов има отлична оценка по
        дисциплина Web приложения.“ и „Иван Петров има отлична оценка по Web
        приложения.“ Да се напише скрипт, който:
        - връща като резултат дължината на низовете;
        - търси „Иванов“ дали се среша в първия низ и връща резултата;
        - разделя двата низа на части, като разделител е space;
        - търси в първия низ думата „дисциплина“ и я заменя с „предмет“;
        - сравнява двата низа.
        -->
        
        <div style="padding-bottom:100px"></div>
        <?php
        $string1='Студентът Иван Иванов има отлична оценка по 
                  дисциплина Web приложения.';
        $string2='Иван Петров има отлична оценка по Web
                  приложения.';
        echo "Дължината на първия стринг е: ".strlen($string1)."<br>";
        echo "Дължината на втория стринг е: ".strlen($string2)."<br>";
        if (strpos($string1, 'Иванов') !== false) {
            echo 'Иванов се среща в първия стринг<br>';
        }
        print_r (explode(" ",$string1));
        echo "<br>";
        print_r (explode(" ",$string2));
        echo "<br>".str_replace("дисциплина", "предмет", $string1)."<br>";
        if (strcmp($string1,$string2))  //ако са еднакви връща 0
        {
            echo 'Не са еднакви';
        } else {
            echo 'Еднакви са';
        }
        ?>
    </body>
</html>
