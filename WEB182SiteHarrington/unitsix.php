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
        
        $pets = $_SESSION['petData'];
        
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
    $_SESSION['petData'] = $pets;
    }

    
    
     
?>
<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <?php

         $errorTitle = "<h4  class='red-text'></h4>";


          if($_SERVER["REQUEST_METHOD"] == "POST"){
            $isError = false;
            $errorsArray = array();

            if(empty($petName)){
              
              $isError = true;
              $errorsArray['petName'] = 'Pet name cannot be empty.';

              
              if($isError == true){
                
              }
            }

            if(empty($ownerLastName)){
              $isError == true;
              $errorsArray['ownerLastName'] = 'Owner last name cannot be empty.';
              if($isError == true){
                
                
              }
            }

            if(!strpos($email, '@') || !strpos($email, '.com')){
              $isError = true;
              $errorsArray['email'] = 'Email must contain @ and .com extension.';
              if($isError == true){
               
              }
            }

            if(!strpos($cell, '-')){
              $isError = true;
              $errorsArray['cell'] = 'Phone number must contain dash (-)';
              if($isError == true){
                
              }
            }

            if(!$allergies == 'Y'|| !$allergies == 'y' || !$allergies == 'N' || !$allergies == 'n'){

              $errorsArray['allergies'] = 'Allergies must contain "Y","y"/ "N","n". ';
              
            }

            if(!strpos($imageName, '.png')){
              $errorsArray['imageName'] = 'Image must contain a .png extension';
            }
            
           

            if(isset($errorText)){
              $errorTitle .= '<h4 class="red-text">Error!</h4>';
              
            }

            
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
        <input type="text" name="pet-name" id="pet-name" value="<?php if(isset($petName)){htmlspecialchars($petName); }?>">
        <label for="pet-name">Pet Name</label>
        <div class="errorMessage"><?php if(isset($errorsArray['petName'])){
          echo $errorsArray['petName'];
        } ?></div>

        <input type="text" name="image-file-name" id="image-file-name" value="<?php if(isset($imageName)){htmlspecialchars($imageName); }?>">
        <label for="image-file-name">Image File Name</label>
        <div class="errorMessage"><?php if(isset($errorsArray['imageName'])){
          echo $errorsArray['imageName'];
        } ?></div>
       

        <input type="text" name="owner-first-name" id="owner-first-name" value="<?php if(isset($ownerFirstName)){htmlspecialchars($ownerFirstName); }?>">
        <label for="owner-first-name">Owner First Name</label>
        <div class="errorMessage"><?php if(isset($errorsArray['ownerFirstName'])){
          echo $errorsArray['ownerFirstName'];
        } ?></div>
        

        <input type="text" name="owner-last-name" id="owner-last-name" value="<?php if(isset($ownerLastName)){htmlspecialchars($ownerLastName); }?>">
        <label for="owner-last-name">Owner Last Name</label>
        <div class="errorMessage"><?php if(isset($errorsArray['ownerLastName'])){
          echo $errorsArray['ownerLastName'];
        } ?></div>

        
        <input type="email" name="email" id="email" value="<?php if(isset($email)){htmlspecialchars($email); }?>">
        <label for="email">Email</label>
        <div class="errorMessage"><?php if(isset($errorsArray['email'])){
          echo $errorsArray['email'];
        } ?></div>

        
        <input type="text" name="cell" id="cell" value="<?php if(isset($cell)){htmlspecialchars($cell); }?>">
        <label for="cell">Cell</label>
        <div class="errorMessage"><?php if(isset($errorsArray['cell'])){
          echo $errorsArray['cell'];
        } ?></div>

        <input type="text" name="allergies" id="allergies" value="<?php if(isset($allergies)){htmlspecialchars($allergies); }?>">
        <label for="allergies">Allergies</label>
        <div class="errorMessage"><?php if(isset($errorsArray['allergies'])){
          echo $errorsArray['allergies'];
        } ?></div>

        <input type="text" name="aggressive" id="aggressive" value="<?php if(isset($aggressive)){htmlspecialchars($aggressive); }?>">
        <label for="aggressive"></label>
        <div class="errorMessage"><?php if(isset($errorsArray['aggressive'])){
          echo $errorsArray['aggressive'];
        } ?></div>

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


