<?php

/*
Създайте файл index.php, който да реализира създаване на текстов файл
array.txt със следното съдържание „10, 35, 30, 44, 55, 14, 73“. Прочетете файла чрез
функция, която извлича съдържанието в низ. Създайте масив със стойности
съдържанието на низа. Напишете файл functions.php. Файлът да съдържа функция,
която намира и извежда произведението от стойностите на елементите на масива,
които са кратни на пет, и отпечатва елементите на масива, които са по-големи от
своите съседи. Включете файла functions.php във файла index.php.
 */
 function func(){       
    $filename = 'SIT2_17621654_L6_Z2,3_data.txt';
    $content = '10 35 30 44 55 14 73';
    $handle = file_put_contents($filename,$content);

    $fp = @fopen("SIT2_17621654_L6_Z2,3_data.txt", "r");
    if ($fp) {
     while (!feof($fp)) {
     $buffer = fgets($fp);
     echo $buffer;
     $arr = explode(" ", $buffer); 
     }
     echo "<br>";
     print_r ($arr);
    }
    echo "<br>";

    $a=1;
    for($i=0;$i<count($arr);$i++)
      {
        if($arr[$i]%5==0){
            $a=$a*$arr[$i];
        } 
       if($i==0&&$arr[$i]>$arr[$i+1]){
           echo $arr[$i]." ";
       }
       else if($i==6&&$arr[$i]>$arr[$i-1]){
            echo $arr[$i]." ";
        }
       else if(($arr[$i]>$arr[$i+1])&&($arr[$i]>$arr[$i-1])&&($i!=0)&&($i<6)){
            echo $arr[$i]." ";
        }

      }
    echo "<br>"; 
    echo $a."<br>";  
    }
?>

