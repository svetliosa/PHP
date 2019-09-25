<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <form method="post">
        Въведете число:
        <input type="number" name="number"><br>
        <br><input type="submit" name="submit1"><br>
        <div style="padding-bottom:20px"></div>
    </form>
    
    <?php
    if (isset($_POST['submit1'])) {
        $number = $_POST["number"];
        $br=0;
        for($i=2;$i<=$number;$i++){
            if($number%$i==0){
                $br++;
            }
        }
        if ($br==1){
            echo "Числото ".$number." е просто";
            /* щом числото се дели само веднъж следователно 
              числото се дели само на себе си и е просто*/
        } else{
            echo "Числото ".$number." не е просто";
        }   
    }   
    ?>
    <!-- Да се напише скрипт, който извежда всички числа в интервала [1..100], със
    сумата от цифрите равна на X (зададено от потребителя). -->
    <form method="post">
    <div style="padding-bottom:100px"></div>
    Първи начин с готова функция
    <div style="padding-bottom:20px"></div>
    Въведете число:
    <input type="number" name="number" min="1" max="18"><br>
    <br><input type="submit" name="submit2"><br>
    <div style="padding-bottom:20px"></div>
    </form>
        <?php
        if (isset($_POST['submit2'])) {
            $number=$_POST["number"];
            for($i=1;$i<=100;$i++){
                if($number==array_sum(str_split($i)))
                echo $i." ";
            }
        }
        ?>
    
    <form method="post">
    <div style="padding-bottom:100px"></div>
    Втори начин с написана функция
    <div style="padding-bottom:20px"></div>
    Въведете число:
    <input type="number" name="number" min="1" max="18"><br>
    <br><input type="submit" name="submit3"><br>
    <div style="padding-bottom:20px"></div>
    </form>
        <?php
        if (isset($_POST['submit3'])) {
             $number=$_POST["number"];
           for($i=1;$i<=100;$i++){
               $d=intval($i/10);
           $e=$i%10;
           if ($e+$d==$number)
                   echo $i." ";
               }      
           }     
        ?>
</body>
</html>
