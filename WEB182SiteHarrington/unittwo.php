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
<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
</head>

    
<?php include("./includes/header.php"); ?>
    
    
<body>

<?php
    
    // add array of food... 
    // name, title/caption , description, image name 
    $foodItems = [

      ['name' => 'cherries', 'title' => 'Cherries that are awesome', 'description' => 'Red cherries in a white bowl', 'imageName' =>  'images/cherries.png'],
      ['name' => 'french', 'title' => 'French bread is delicious', 'description' => 'Moist, crispy bread on table', 'imageName' => 'images/french.png'],
      ['name' => 'pasta', 'title' => 'Pasta that has a lot of flavor', 'description' => 'Pasta in a bowl with wine' , 'imageName' => 'images/pasta.png'],
      ['name' => 'popsicle', 'title' => 'Cool, hydrating popsicle', 'description' => 'Popsicle that is red and white' , 'imageName' => 'images/popsicle.png'],
      ['name' => 'salmon', 'title' => 'Rich flavored salmon', 'description' => 'Salmon in bowl with sauce and toppings' , 'imageName' => 'images/salmon.png'],
      ['name' => 'sandwich', 'title' => 'Delicious sandwich', 'description' => 'Sandwich with multiple toppings' , 'imageName' => 'images/sandwhich2.png'],
      ['name' => 'sandwich2', 'title' => 'Awesome sandwich', 'description' => 'Sandwich that has different topping combinations', 'imageName' => 'images/sandwich.png'],
      ['name' => 'steak', 'title' => 'Best steak in the city', 'description' => 'Juicy steak covered in sauce' , 'imageName' => 'images/steak.png']

    ];

    //display array information

    echo '<div class="w3-row-padding w3-padding-16 w3-center" id="center" >';

    //print_r($foodItems);

    // display items 1-4


    for($i = 0; $i < 4; $i++){

      echo '<div class="w3-quarter"> ';
      echo '<img src="' . $foodItems[$i]['imageName']  . '"alt="' . $foodItems[$i]['name'] . '" style="width:100%">';
      echo '<h3>' . $foodItems[$i]['title'] . '</h3>';
      echo '<p>' . $foodItems[$i]['description'] . '</p>';
      echo '</div>';
    }

    echo '<div class="w3-row-padding w3-padding-16 w3-center">';

    //display items 4-7

    for($i = 4; $i > 3 && $i < 8; $i++){

      echo '<div class="w3-quarter"> ';
      echo '<img src="' . $foodItems[$i]['imageName']  . '"alt="' . $foodItems[$i]['name'] . '" style="width:100%">';
      echo '<h3>' . $foodItems[$i]['title'] . '</h3>';
      echo '<p>' . $foodItems[$i]['description'] . '</p>';
      echo '</div>';
    }
        
 ?>
   

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Unit Two</h1>
    </div>
  </div>
</div>
 
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

   
    <?php
    
    
  
    // display array information ...
    
    echo '<div class="w3-row-padding w3-padding-16 w3-center" id="food">';
     
     // display items 0,1,2,3...
      
    
     
    echo '<div class="w3-row-padding w3-padding-16 w3-center">';
    
    // display items 4,5,6,7...
     
   
    ?>
  
   

<!-- Footer -->
<?php include("./includes/footer.php"); ?>

</body>
</html>

