<!DOCTYPE html>
<html lang="en">
<head>
<title>WEB 182</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="./css/sitecss.css">   
 
</head>

    
<?php include("./includes/header.php"); ?>
    
    
<body>


   

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Unit One</h1>
    </div>
  </div>
</div>

 
<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

<h1>Tip Calculator</h1>

    <?php

        if($_SERVER["REQUEST_METHOD"] == 'POST'){
         /*   var_dump($_POST); //shows us what's in the post

            echo "<p>Show Elements One by One</p>";
            echo "<br />";
            echo "<label>Price: </label>";
            echo $_POST['price'];

            echo "<br />";
            echo "<label>Tip: </label>";
            echo $_POST["tip"];
            echo "<label>Other Tip:</label>";
            echo $_POST["other_tip_percent"];
            echo "<br />"; 
            */

            //get information from post and put in variables
            

            $price = $_POST['price'];
            $tip = 0; 
            
            if(!empty($_POST['tip'])){
                $tip = $_POST['tip'];
            } else if(!empty($_POST['other_tip_percent'])){
                $tip = $_POST['other_tip_percent'];
            }

            $total = $price + ($price * $tip);

            //then print out when you have all variables set
            echo "<label>Price: </label>";
            echo $price;
            echo "<br/>";
            echo "<label>Tip: </label>";
            echo $tip;
            echo "<br />";
            echo "<label>Total: </label>";
            echo $total;


        } else {


            ?>

            <form action="" method="post">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price"><br>
                
                <br>
                <label for="tip">Choose Tip Amount:</label><br>
                <input type="radio" id="ten_percent" name="tip" value=".10">
                <label for="ten_percent">10%</label><br>
                <input type="radio" id="fifteen_percent" name="tip" value=".15">
                <label for="fifteen_percent">15%</label><br>
                <input type="radio" id="twenty_percent" name="tip" value=".20">
                <label for="twenty_percent">20%</label><br>
                
                <label for="other_tip_percent">Other (percent, e.g. 10% is .10):</label>
                <input type="text" id="other_tip_percent" name="other_tip_percent"><br>
                
                <input type="submit" value="Submit">
            
            </form>

            <?php } ?>

<!-- Footer -->
<?php include("./includes/footer.php"); ?>

</body>
</html>

