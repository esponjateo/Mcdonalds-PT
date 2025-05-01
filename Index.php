<?php
    session_start();
    $Order = array();
    

    if (!isset($_SESSION['opt1'])) 
    {
        $_SESSION['opt1'] = 0;
    }
    
    if(isset($_POST["+1"]))
    {
        $_SESSION['opt1'] += 1;
    }
    

    if (isset($_POST["-1"])) {
        $_SESSION['opt1'] = max(0, $_SESSION['opt1'] - 1);
    }

   $opt1 = $_SESSION['opt1'];


    
   if (!isset($_SESSION['opt2'])) 
   {
       $_SESSION['opt2'] = 0;
   }
   
   if(isset($_POST["+2"]))
   {
       $_SESSION['opt2'] += 1;
   }
   

   if (isset($_POST["-2"])) {
       $_SESSION['opt2'] = max(0, $_SESSION['opt2'] - 1);
   }

  $opt2 = $_SESSION['opt2'];

  
   if (!isset($_SESSION['opt3'])) 
   {
       $_SESSION['opt3'] = 0;
   }
   
   if(isset($_POST["+3"]))
   {
       $_SESSION['opt3'] += 1;
   }
   

   if (isset($_POST["-3"])) {
       $_SESSION['opt3'] = max(0, $_SESSION['opt3'] - 1);
   }

  $opt3 = $_SESSION['opt3'];


   if (!isset($_SESSION['opt4'])) 
   {
       $_SESSION['opt4'] = 0;
   }
   
   if(isset($_POST["+4"]))
   {
       $_SESSION['opt4'] += 1;
   }
   

   if (isset($_POST["-4"])) {
       $_SESSION['opt4'] = max(0, $_SESSION['opt4'] - 1);
   }

  $opt4 = $_SESSION['opt4'];






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        
    <h1>Mcdonalds Menu</h1>
        
<!--           
        <input type="checkbox" name="Options1" value="Ulol"> A. Chicken <p 
            src="<?php echo $Minus ?>">  </p>  <br> -->



        <input type="checkbox" name="Options1" value="Chicken"> A. Chicken <input type="submit" value="-" name="-1"> <span><?php echo $opt1; ?></span> <input type="submit" value="+" name="+1"> <label for="">99 Php</label> <br>
        <input type="checkbox" name="Options2" value="Nuggets"> B. Nuggets <input type="submit" value="-" name="-2"> <span><?php echo $opt2; ?></span> <input type="submit" value="+" name="+2"> <label for="">111 Php</label> <br>
        <input type="checkbox" name="Options3" value="Pork"> C. Pork <input type="submit" value="-" name="-3"> <span><?php echo $opt3; ?></span> <input type="submit" value="+" name="+3"> <label for="">120 Php</label> <br>
        <input type="checkbox" name="Options4" value="Beef"> D. Beef <input type="submit" value="-" name="-4"> <span><?php echo $opt4; ?></span> <input type="submit" value="+" name="+4"> <label for="">105 Php</label> <br>

        <input type="submit" name="Confirm" value="Confirm" style="margin-bottom: 20px;"> 




    </form>

   <?php
   

   if(isset($_POST["Confirm"]))
   {
       $total = 0;

       if (isset($_POST["Options1"]))
       {
           $price = 99;
           $quantity = $_SESSION["opt1"];
           echo "Chicken x $quantity = " . ($price * $quantity) . " Php<br>";
           $total += $price * $quantity;
       }

       
       if (isset($_POST["Options2"]))
       {
           $price = 111;
           $quantity = $_SESSION["opt2"];
           echo "Nuggets x $quantity = " . ($price * $quantity) . " Php<br>";
           $total += $price * $quantity;
       }
       
       if (isset($_POST["Options3"]))
       {
           $price = 120;
           $quantity = $_SESSION["opt3"];
           echo "Pork x $quantity = " . ($price * $quantity) . " Php<br>";
           $total += $price * $quantity;
       }
       

       
       if (isset($_POST["Options4"]))
       {
           $price = 105;
           $quantity = $_SESSION["opt4"];
           echo "Beef x $quantity = " . ($price * $quantity) . " Php<br>";
           $total += $price * $quantity;
       }
       



       echo "<strong>Total: $total Php</strong><br>";
   }




   ?>


</body>
</html>