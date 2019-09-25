<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            first name <input type="text" name="first_name"><br>
            <div style="padding-bottom:10px"></div>
            second name <input type="text" name="second_name"><br>
            <div style="padding-bottom:10px"></div>
            email <input type="text" name="email"><br>
            <div style="padding-bottom:10px"></div>
            <input type="submit" name="submit" value="Create and show"><br>
            
        </form>
        
<?php

class Person{
        public $first_name,$second_name,$email;
        
        function __construct ($first_name, $second_name, $email){
            $this->first_name = $first_name;
            $this->second_name = $second_name;
            $this->email = $email; 
        }
        
        function show_person(){
            $per= "first name: ".$this->first_name."<br>second name: ". $this->second_name."<br>email: ".$this->email;
            echo $per;
            }
        } 

if (isset($_POST['submit'])) {
     $first_name = $_POST["first_name"];
     $second_name = $_POST["second_name"];
     $email = $_POST["email"];
     $per=new Person($first_name, $second_name, $email);
     $per->show_person();
    }
    
 

?>
    </body>
</html>