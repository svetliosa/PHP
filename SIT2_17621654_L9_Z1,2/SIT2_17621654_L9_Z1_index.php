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
        class Donation { 
            public $name;
            public $amount;
            private $totalDonated;
            private $numberOfDonors;
            
            function __construct ($na, $am){
                $this->name = $na;
                $this->amount = $am;
            }
           
            function show_info(){
                $art= "Име: ".$this->name."<br>Стойност: ".$this->amount."<br>Текуща сума: ".$this->totalDonated."<br>Брой дарители: ".$this->numberOfDonors;
                echo $art;
                }
        }
        
             function info(){
        $totalDonated=0; 
        $numberOfDonors=0;
        $donors = array( new Donation("Nichola",85.00), new Donation("Mitko", 50.00), new Donation("Emily", 90.00), new Donation("Iliana", 65.00)) ;  
        foreach($donors as $key=>$value){
               $totalDonated += $value->amount;
           $numberOfDonors++;
        }
     
        foreach($donors as $key=>$value){ 
          $avg=($value->amount/$totalDonated)*100;
          echo $value->name." donated ".$value->amount." ( ".$avg.") <br>";
        }
       
        echo "Total Donations  = ".$totalDonated."<br>";
        echo "Number of Donors = ".$numberOfDonors; 
        }
           
           info();
        ?>
    </body>
</html>
