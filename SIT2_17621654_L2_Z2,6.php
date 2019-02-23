<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <p>Намерете решението на ax^2 + bx + c<br>

    <form method="post">
        a:
        <input type="number" name="a" min="1"><br>
        b:
        <input type="number" name="b" min="1"><br>
        c:
        <input type="number" name="c" min="1"><br>
        <br><input type="submit" name="submit" value="Намери x!"><br>
    </form>
</p>
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        if ($_POST['a'] == "" || $_POST['b'] == "" || $_POST['b'] == "") {
            echo "Моля въведете стойности<br>";
        } else {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
            $d = ($b * $b) - (4 * $a * $c);
            if ($d > 0) {
                $x1 = (-$b - sqrt($d)) / (2 * $a);
                $x2 = (-$b + sqrt($d)) / (2 * $a);
                echo"x1= " . $x1 . "<br>x2= " . $x2;
            } elseif ($d == 0) {
                $x = (-$b) / (2 * $a);
                echo "x=  " . $x;
            } else
                echo "Уравнението няма корени";
        }
    }
    ?>
    
    <div style="padding-bottom:100px"></div>
    <table style='width:300px' border='1'>
        <?php
        echo "<tr>";
        echo "<th>x</th><th>Square</th><th>Square root</th>";
        echo "</tr>";
        $i=1;
        do{
            $s=$i*$i;
            $r=(sqrt($i));
         echo "<tr>";
        echo "<th>$i</th><th>$s</th><th>$r</th>";
        echo "</tr>";  
        $i++;
        }while($i<=12);
        ?>
        
    </table>
    
</body>
</html>
