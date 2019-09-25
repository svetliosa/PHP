<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            Заглавие:<input type="text" name="headline"> <br>
            Автор:<input type="text" name="author"> <br>
            Издателство:<input type="text" name="publisher"> <br>
            Година на издаване:<input type="text" name="year"> <br>
            <input type="submit" name="submit" value="Въведи"> <br>
            </form>
            <?php
            include 'config.php';
            
            if (isset($_POST["submit"])) {
                $headline = $_POST['headline'];
                $author = $_POST['author'];
                $publisher = $_POST['publisher'];
                $year = $_POST['year'];
                
                if (!empty($headline) && !empty($author) && !empty($publisher) && !empty($year)) {
                    $sql = "INSERT INTO books (HEADLINE, AUTHOR, PUBLISHER, YEAR) VALUES ('$headline', '$author', '$publisher', $year)";
                    
                    $result = mysqli_query($dbConn, $sql);
                    if (!$result) {
                        die('Грешка!!!');
                        mysqli_close($dbConn);
                    } echo "Добавихте един запис.";
                } else
                    echo "Не сте въвели всички данни!!!";
                
                mysqli_close($dbConn);

            }
            ?>
            </body>
            </html>
