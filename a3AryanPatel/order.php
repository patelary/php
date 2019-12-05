<?php session_start()?><!DOCTYPE html>
<!--
Aryan Patel
 Student Id:- 991511203
SYS10199 - WEB PROGRAMMING 
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/a3CSS.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body bgcolor="grey">
    
        <?php
       
        $coffee = $_POST['coffee'];
        $size = $_POST['size'];
        $creams = $_POST['creams'];
        $sugars = $_POST['sugars'];
        
        
      //  $total = $;
        
        
        if($coffee <= 0){
            echo "<p id='t'>you cannot have a coffee</p><hr><br>";
            echo "<a href='http://patelary.dev.fast.sheridanc.on.ca/webprog/php/a3AryanPatel/index.php'>Go Back</a>";
        }
        else{
            echo "<h1 id='n'>Thanks For Your Purchase</h1><hr>";
            echo "<br><div id='b'>";
            echo "<br>";
            
        for($i=0;$i<$coffee;$i++)
        {
            if($size == "Small"){
                echo "<img src='images/cup.jpg' height='50px'/>";
            }
            else if($size == "Regular"){
                echo "<img src='images/cup.jpg' height='96px'/>";
            }
            else if($size == "Large"){
                echo "<img src='images/cup.jpg' height='170px'/>";
            }
            else if($size == "Extra-Large"){
                echo "<img src='images/cup.jpg' height='278px'/>";
            }
        }
        
        if($creams <= 0){
            echo " ";
        }
        else{
        echo "<br><img src='images/plus.jpg'height='50px'/>"; // plus img
        for($i=0;$i<$creams;$i++)
         {
          echo "<img src='images/cream.jpg'/>";
         }
        }
           echo "<br>";
        
         
         if($sugars <= 0){
             echo " ";
         }
         else{
         echo "<br><img src='images/plus.jpg'height='50px'/>"; // plus img
         for($i=0;$i<$sugars;$i++)
         {
          echo "<img src='images/sugar.jpg'/>";
         }
         }
         echo "</div><br>";
         echo "<br><br>";
        
         if($size == "Small"){
         $costCof = $coffee * 2;
         }
         else if($size == "Regular"){
         $costCof = $coffee * 3; 
         }
         else if($size == "Large"){
         $costCof = $coffee * 4; 
         }
         else if($size == "Extra-Large"){
         $costCof = $coffee * 5; 
         }
         
         $costCre = $creams * 0.30;  //cream cost 
         $costSug = $sugar * 0.45;
         
         $total = $costCof + $costCre + $costSug;
         $txt = ($total*13)/100;
         $totalCost = $total + $txt;
         echo "<h2 id='y'>Total Amount(Including Tax): " . $totalCost . "</h2>";
        }
        ?>
    </body>
</html>
