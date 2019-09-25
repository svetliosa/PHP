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
        <!--        Изисква се да създадете форма, изискваща от потребителя да избере опции
        за времето, през даден месец. В отделни полета се въвеждат името на града, месеца и
        годината. Под тези полета се изреждат списък от checkboxes със стойност: rain,
        sunshine, clouds, hail, sleet, snow, wind. Създайте масив $weather[], от избраните опции,
        по следния начин:
        <input type="checkbox" name="weather[]" value="sunshine" />Sunshine<br />

        В секцията за отговор, създайте масив $inputLocal от въведените от потребителя: city,
        month и year. Отпечатайте следния отговор:"In $city in the month of $month $year, you
        observed the following weather:", където $city, $month и $year са стойностите, от
        създадения от вас масив.
        След това, използвайки масив $weather[], получен от формата на потребителя,
        изпратете обратно към потребителя неномериран списък с избраните опции за
        времето.
        -->
        <form method="post" target="_blank">
            Please enter your information:<br>
            <div style="padding-bottom:20px"></div>
            City: <input type="text" name="city">
            Month: <input type="text" name="month">
            Year: <input type="number" name="year"><br>
        <div style="padding-bottom:20px"></div>
        Please choose the kinds of weather you experienced from the list below.
        Choose all that apply.
        <div style="padding-bottom:20px"></div>
        <input type="checkbox" name="weather[]" value="sunshine"> Sunshine<br>
        <input type="checkbox" name="weather[]" value="clouds"> Clouds<br>
        <input type="checkbox" name="weather[]" value="rain"> Rain<br>
        <input type="checkbox" name="weather[]" value="hail"> Hail<br>
        <input type="checkbox" name="weather[]" value="sleet"> Sleet<br>
        <input type="checkbox" name="weather[]" value="snow"> Snow<br>
        <input type="checkbox" name="weather[]" value="wind"> Wind<br>
        <input type="checkbox" name="weather[]" value="cold"> Cold<br>
        <input type="checkbox" name="weather[]" value="heat"> Heat<br>
        <div style="padding-bottom:20px"></div>
        <br><input type="submit" name="submit" value="Go" formaction="SIT2_17621654_L4_Z3,4_action_page.php"><br>
        </form>
        <div style="padding-bottom:100px"></div>
        
        

        <!-- Да се създаде файл letters.php, който може да се използва за генерация на
        писма до множество ползватели, за участието им в различни мероприятия.
        Информацията за хората и мероприятията да е в отделен файл с име data.php.
        (В самият скрипт letters.php, генериращ поканата, използвайте масиви, условни
        оператори, цикли, include или require и други изучени вече конструкции.)
        Резултат:
        Уважаеми (а), Иван Иванов
        Имаме удоволствието да ви поканим на открито изложение
        Бъдете 10 минути преди откриването!
        С уважение, Деян Иванов!

        Уважаеми (а), Петър Петров
        Имаме удоволствието да ви поканим на бал на випускниците.
        Не забравяйте да донесете подарък :-)
        С уважение, Деян Иванов!

        Уважаеми (а), Симеон Семов
        Имаме удоволствието да ви поканим на ден на отворените врати.
        Моля, потвърдете Вашето участие по телефона!
        С уважение, Деян Иванов! -->
        <?php
            $arr = array();

            $arr[0] = array();
            $arr[0]['name'] = 'Иван Иванов';
            $arr[0]['event'] = 'Имаме удоволствието да ви поканим на открито изложение.';
            $arr[0]['msg'] = 'Бъдете 10 минути преди откриването!';

            $arr[1] = array();
            $arr[1]['name'] = 'Петър Петров';
            $arr[1]['event'] = 'Имаме удоволствието да ви поканим на бал на випускниците.';
            $arr[1]['msg'] = 'Не забравяйте да донесете подарък :-)';

            $arr[2] = array();
            $arr[2]['name'] = 'Симеон Семов';
            $arr[2]['event'] = 'Имаме удоволствието да ви поканим на ден на отворените врати.';
            $arr[2]['msg'] = 'Моля, потвърдете Вашето участие по телефона!';

            for($i=0;$i<3;$i++){
            echo "Уважаеми (а),  ".$arr[$i]['name'].
                 "<br>".$arr[$i]['event']."<br>".
                 $arr[$i]['msg']."<br>С уважение, Деян Иванов!<br><hr>";
            }       

            $file = 'SIT2_17621654_L4_Z3,4_data.php';
            file_put_contents($file, var_export($arr, true));
        ?>  
    </body>
</html>






