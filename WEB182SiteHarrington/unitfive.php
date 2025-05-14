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
 <!--To do: Import materialize.css-->
<link rel="stylesheet" href="css/materialize.css">
  
</head>

    
<?php include("./includes/header.php"); ?>
<!--To do: Require functions.php -->
 <?php include("./includes/functions.php")  ?>  
    
<body>
<?php 

    $customer_id = 0;
     
    $pets= array();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // determine customer id
        
        
        // use array_push to add pet to the array , get values from the post global 
        // an example of one element is 'imageName' => "{$_POST['imageName']}"


        $imageName = $_POST['image-file-name'];
        $petName = $_POST['pet-name'];
        $ownerFirstName = $_POST['owner-first-name'];
        $ownerLastName = $_POST['owner-last-name'];
        $email = $_POST['email'];
        $cell = $_POST['cell'];
        $allergies = $_POST['allergies'];
        $aggressive = $_POST['aggressive'];
        $customer_id += 1;
        $active_row = 'NO';

        array_push($pets, ['imageName' => $imageName, 'customerID' => $customer_id, 'petName' => $petName, 'activeRow' => $active_row, 'ownerFirstName' => $ownerFirstName, 'ownerLastName' => $ownerLastName, 'email' => $email, 'cell' => $cell, 'Allergies' => $allergies, 'Aggressive' => $aggressive]);
         
   
    } else {
        // default pet list
        $pets =[ 
        
        ['imageName' => 'mouse.png', 'customerID' => '1', 'petName' => 'minnie', 'activeRow' => 'NO', 'ownerFirstName' => 'Sally', 'ownerLastName' => 'Jones', 'email' => 'owner@gmail.com', 'cell' => '336-555-1212', 'Allergies' => 'N', 'Aggressive' => 'N'],
        
        ['imageName' => 'aligator.png', 'customerID' => '2', 'petName' => 'alfred', 'activeRow' => 'NO', 'ownerFirstName' => 'Sally', 'ownerLastName' => 'Jones', 'email' => 'owner@gmail.com', 'cell' => '336-555-1212', 'Allergies' => 'N', 'Aggressive' => 'Y']
   
    ];
    }

    
    
     
?>
<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <?php

         $errorTitle = "<h4  class='red-text'></h4>";


          if($_SERVER["REQUEST_METHOD"] == "POST"){
            $errorText = '<section class="section red-text"></section>';
            $isError = false;

            if(empty($petName)){
              
              $isError = true;
              if($isError == true){
                $errorText .= "<p class='red-text'>Pet name field cannot be left blank.</p>";
              }
            }

            if(empty($ownerLastName)){
              $isError == true;
              if($isError == true){
                $errorText .= "<p class='red-text'> Owner's last name is left blank. </p>";
                
              }
            }

            if(!strpos($email, '@') || !strpos($email, '.com')){
              $isError = true;
              if($isError == true){
                $errorText .= "<p class='red-text'>Your email is invalid. It must contain @ and .com.</p>";
              }
            }

            if(!strpos($cell, '-')){
              $isError = true;
              if($isError == true){
                $errorText .= '<p class="red-text">Your phone number is invalid. It must contain at least on dash "-".</p>';
              }
            }

            if(!$allergies == 'Y'|| !$allergies == 'y' || !$allergies == 'N' || !$allergies == 'n'){

              $errorText .= '<p class="red-text">Your allergies response is invalid. It must be "Y", "y", "N", "n". "Y/y" is for yes. "N/y" is for no.</p>';
            }

            if(!strpos($imageName, '.png')){
              $errorText .= "<p class='red-text'>Your image-file name is invalid. Your image-file name must end in .png</p>";
            }
            
           

            if(isset($errorText)){
              $errorTitle .= '<h4 class="red-text">Error!</h4>';
              echo $errorTitle;
            }

            echo $errorText;
          }

      ?>


      

      <h1>Unit Four</h1>
        <section>
            <?php echo displayRow($pets); ?>
        </section>
        <section class="container grey-text">
		<h4 class="center">Add a Pet</h4>
		<form class="white" action="" method="POST">
			 <!--To do: Create your form, remember the name attribute(s) is 
                what you use in the postback section to get user data out of the post 
                -->
        <input type="text" name="pet-name" id="pet-name">
        <label for="pet-name">Pet Name</label>

        <input type="text" name="image-file-name" id="image-file-name">
        <label for="image-file-name">Image File Name</label>

        <input type="text" name="owner-first-name" id="owner-first-name">
        <label for="owner-first-name">Owner First Name</label>

        <input type="text" name="owner-last-name" id="owner-last-name">
        <label for="owner-last-name">Owner Last Name</label>

        
        <input type="email" name="email" id="email">
        <label for="email">Email</label>

        
        <input type="text" name="cell" id="cell">
        <label for="cell">Cell</label>

        <input type="text" name="allergies" id="allergies">
        <label for="allergies">Allergies</label>

        <input type="text" name="aggressive" id="aggressive">
        <label for="aggressive"></label>

        <div class="center">
          <button class="btn" name="button">Submit</button>
        </div>
        
		</form>
	</section>
  </div>
    </div>
  </div>
 
 
 
<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

<!-- Footer -->
<?php include("./includes/footer.php"); ?>

</body>
</html>



