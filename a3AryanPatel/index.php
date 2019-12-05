<!DOCTYPE html>
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
    <body bgcolor="black">
        
    <center><img src="images/LOGO-TIM-HORTONS-REVERSE-625X276-11K_1.png" id="c"/></center>
    <h1 style="color:white">Start Your Day With A Coffee </h1><hr>
        <h2>We Know You Want More!</h2>
    
        <div id="a">
        <form action="order.php" method="post" id="form">
            <span style='color: white'>Number Of Coffees: </span><input type="number" name="coffee"><br>
        <label><span style='color:white'>Size:     </span></label>
        <select name="size">
                  <option value="Small">Small</option>
                  <option value="Regular">Regular</option>
                  <option value="Large">Large</option>
                  <option value="Extra-Large">Extra-Large</option>
        </select><br>
              
        <span style="color:white">How many creams?</span><input type="number" name="creams"><br>
        <span style="color:white">How many sugars?</span><input type="number" name="sugars"><br>
        <br><input type="submit" value="Order Coffee"> 
        </form>
        </div>
    </body>
</html>
