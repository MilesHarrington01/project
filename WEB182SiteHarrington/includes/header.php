<?php

  session_start();

  $firstName = $_SESSION['firstName'];
  $lastName = $_SESSION['lastName'];

?>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
 <?php
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


    if (strpos($url,'index') !== false) {
        echo '<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>';
    } else {
  
        echo '<a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>';
    };
      if (strpos($url,'unitone') !== false) {
        echo '<a href="unitone.php" class="w3-bar-item w3-button w3-padding-large w3-white">Unit One</a>';
    } else {
  
        echo '<a href="unitone.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Unit One</a>';
    };
      if (strpos($url,'unittwo') !== false) {
        echo '<a href="unittwo.php" class="w3-bar-item w3-button w3-padding-large w3-white">Unit Two</a>';
    } else {
  
        echo '<a href="unittwo.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Unit Two</a>';
    };
      if (strpos($url,'unitthree') !== false) {
        echo '<a href="unitthree.php" class="w3-bar-item w3-button w3-padding-large w3-white">Unit Three</a>';
    } else {
  
        echo '<a href="unitthree.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Unit Three</a>';
    };
      if (strpos($url,'unitfour') !== false) {
        echo '<a href="unitfour.php" class="w3-bar-item w3-button w3-padding-large w3-white">Unit Four</a>';
    } else {
  
        echo '<a href="unitfour.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Unit Four</a>';
    };
      if (strpos($url,'unitfive') !== false) {
        echo '<a href="unitfive.php" class="w3-bar-item w3-button w3-padding-large w3-white">Unit Five</a>';
    } else {
  
        echo '<a href="unitfive.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Unit Five</a>';
    };
      if (strpos($url,'unitsix') !== false) {
        echo '<a href="unitsix.php" class="w3-bar-item w3-button w3-padding-large w3-white">Unit Six</a>';
    } else {
  
        echo '<a href="unitsix.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Unit Six</a>';
    };
      ?>
  
     
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="../index.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:60px 16px">
  <h1 class="w3-margin w3-jumbo">WEB 182 - Miles Harrington</h1>
  <p>
    <?php echo 'Welcome to my site '; echo htmlspecialchars($firstName); echo ' '; echo htmlspecialchars($lastName); ?>
  </p>
   
</header>
