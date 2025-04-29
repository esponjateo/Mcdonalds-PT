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











    if(isset($_POST["Confirm"]))
    {

        if (isset($_POST["Options1"]))
        {

            echo "I am Ulol <Br>";
        }

        
        if (isset($_POST["Options2"]))
        {
            echo "I am Tanga<Br>";
        }
        
        if (isset($_POST["Options3"]))
        {
            echo "I am Bobo<Br>";
        }
        
    }


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



        <input type="checkbox" name="Options1" value="Chicken"> A. Chicken <input type="submit" value="-" name="-1"> <span><?php echo $opt1; ?></span> <input type="submit" value="+" name="+1"> <br>
        <input type="checkbox" name="Options1" value="Nuggets"> B. Nuggets <input type="submit" value="-" name="-2"> <span><?php echo $opt2; ?></span> <input type="submit" value="+" name="+2"> <br>
        <input type="checkbox" name="Options2" value="Pork"> C. Pork <input type="button" value="-" name="-3"> <var name="Input3">0</var> <input type="button" value="+" name="+3"> <br>
        <input type="checkbox" name="Options3" value="Beef"> D. Beef <input type="button" value="-" name="-4"> <var name="Input4">0</var> <input type="button" value="+" name="+4"> <br>

        <input type="submit" name="Confirm" value="Confirm"> 


        


    </form>




</body>
</html>

