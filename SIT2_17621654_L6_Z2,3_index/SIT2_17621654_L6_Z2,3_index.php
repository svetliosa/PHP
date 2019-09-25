<?php
   /* Създайте файл index.php, който да съдържа форма за Upload на файлове. 
    Създайте скрипт upload_file.php, чрез който да качите файла data.txt (от първа задача),
    като зададете ограничения за типа на качваните файлове (текстови файлове и
    картинки) и за размера им (до 20 0000). Съхранете качения файл в нова папка,
    например upload (създаден предварително), като поддиректория на текущата (текуща е
    тази в която е upload_file.php).
    */

   if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $tmp=explode('.',$_FILES['file']['name']);
      $file_ext=strtolower(end($tmp));
      
      $extensions= array("txt","jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="Extension not allowed, please choose a TXT, JPEG or PNG file.";
      }
      
      if($file_size > 20000){
         $errors[]=' File size must be excately 2.5 KB. ';
      }
      
      if(empty($errors)==true){
          //създайте първо папка upload
         move_uploaded_file($file_tmp,"upload/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
        Filename: <input type="file" name="file" />
        <div style="padding-bottom:10px"></div>
         <input type="submit"/>
         <div style="padding-bottom:100px"></div>
      </form>
      
       
       <?php
            include 'SIT2_17621654_L6_Z2,3_func.php';
            echo func();
       ?>
   </body>
</html>