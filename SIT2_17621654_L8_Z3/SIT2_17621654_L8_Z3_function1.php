<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            title <input type="text" name="title"><br>
            <div style="padding-bottom:10px"></div>
            author <input type="text" name="author"><br>
            <div style="padding-bottom:10px"></div>
            description <input type="text" name="description"><br>
            <div style="padding-bottom:10px"></div>
            <input type="submit" name="submit" value="Create and show"><br>
            
        </form>
        
<?php

class Article{
        public $title,$author,$description;
        
        function __construct ($t, $a, $d){
            $this->title = $t;
            $this->author = $a;
            $this->description = $d; 
        }
        
        function show_article(){
            $art= "Заглавие: " . $this->title ."<br>Описание: ". $this->description."<br>Автор: ".$this->author;
            echo $art;
            }
        }

if (isset($_POST['submit'])) {
     $title = $_POST["title"];
     $author = $_POST["author"];
     $description = $_POST["description"];
     $newa=new Article($title, $author, $description);
     $newa->show_article();
    }
    
 

?>
    </body>
</html>