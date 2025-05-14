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
 <style>
    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 600px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    } 
    .styled-table thead tr {
    background-color: #f54242;
    color: #ffffff;
    text-align: left;
        
    }
    .styled-table th,
    .styled-table td {
    padding: 12px 15px;
    }
    .styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #f54242;
    }
    .styled-table tbody tr.active-row {
    font-weight: bold;
    color: #f54242;
    }
</style>
</head>

    
<?php include("./includes/header.php");
    
// create an array of pet data...    

    $pets = [

        ['imageName' => 'images/mouse.png', 'customerID' => 1, 'petName' => 'minnie', 'ownersLastName' => 'Sally','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'N', 'Aggressive' => 'N'],
        
        ['imageName' => 'images/aligator.png', 'customerID' => 2, 'petName' => 'alfred', 'ownersLastName' => 'Jones','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'N', 'Aggressive' => 'Y'],

        ['imageName' => 'images/boar.png', 'customerID' => 3, 'petName' => 'bobby', 'ownersLastName' => 'Sally','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'N', 'Aggressive' => 'Y'],

        ['imageName' => 'images/walrus.png', 'customerID' => 4, 'petName' => 'wally', 'ownersLastName' => 'Sally','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'N', 'Aggressive' => 'N'],

        ['imageName' => 'images/crab.png', 'customerID' => 5, 'petName' => 'chrissy', 'ownersLastName' => 'Sally','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'Y', 'Aggressive' => 'Y'],

        ['imageName' => 'images/sloth.png', 'customerID' => 6, 'petName' => 'sally', 'ownersLastName' => 'Sally','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'N', 'Aggressive' => 'Y'],

        ['imageName' => 'images/shark.png', 'customerID' => 7, 'petName' => 'shawn', 'ownersLastName' => 'Jones','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'N', 'Aggressive' => 'Y'],

        ['imageName' => 'images/chicken.png', 'customerID' => 8, 'petName' => 'chaz', 'ownersLastName' => 'Jones','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'N', 'Aggressive' => 'N'],

        ['imageName' => 'images/fox.png', 'customerID' => 9, 'petName' => 'chopper', 'ownersLastName' => 'Jones','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'Y', 'Aggressive' => 'Y'],

        ['imageName' => 'images/cow.png', 'customerID' => 10, 'petName' => 'moo', 'ownersLastName' => 'Jones','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'Y', 'Aggressive' => 'N'],

        ['imageName' => 'images/octopus.png', 'customerID' => 11, 'petName' => 'squilly', 'ownersLastName' => 'Jones','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'N', 'Aggressive' => 'Y'],

        ['imageName' => 'images/vulture.png', 'customerID' => 12, 'petName' => 'albert', 'ownersLastName' => 'Jones','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'Y', 'Aggressive' => 'Y'],

        ['imageName' => 'images/whale.png', 'customerID' => 13, 'petName' => 'willy', 'ownersLastName' => 'Jones','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'Y', 'Aggressive' => 'N'],

        ['imageName' => 'images/shrimp.png', 'customerID' => 14, 'petName' => 'gilbert', 'ownersLastName' => 'Jones','ownersFirstName'=>
        'Jones', 'OwnersEmail' => 'owner@gmail.com', 'OwnersPhoneNumber' => '336-555-1212', 'Allergies' => 'N', 'Aggressive' => 'N']












    ];

  
 //function to remove all active rows, you can use this or not   

    //ATTENTION: I have a JavaScript file connected to this to handle the highlighting of rows.

 


// create a function to display a row of data, be sure to return the string vs echo it in the function

    function displayData($pets){

      $data = '';

      for($i = 0; $i < count($pets); $i++){ 

        $data .= "

          <tr data-customer-id='{$pets[$i]['customerID']}'>
            <td><img src='{$pets[$i]['imageName']}' width='50' /></td>
            <td>{$pets[$i]['customerID']}</td>
            <td>{$pets[$i]['petName']}</td>
            <td>{$pets[$i]['ownersLastName']}</td>
            <td>{$pets[$i]['ownersFirstName']}</td>
            <td>{$pets[$i]['OwnersEmail']}</td>
            <td>{$pets[$i]['OwnersPhoneNumber']}</td>
            <td>{$pets[$i]['Allergies']}</td>
            <td>{$pets[$i]['Aggressive']}</td>
          </tr>
        
        
        
        
        ";
       
      }

      return $data;
      
    }

?> 
    
    
<body>
 
     
<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Unit Three</h1>
    </div>
  </div>
</div>
    
 
  <div class="w3-content">
    <table class="styled-table">
     <thead>
          <tr>
            <th>Picture</th>
            <th>Customer ID</th>
            <th>Pet Name</th>
            <th>Owner Last Name</th>
            <th>Owner First Name</th>
            <th>Owner Email</th>
            <th>Owner Cell/Phone</th>
            <th>Allergies? Y/N</th>
            <th>Aggressive? Y/N</th>
          </tr>
        </thead>
        <tbody>
            <?php 

              echo  displayData($pets);

            ?>
        </tbody>
</table>

    <?php



    ?>

    <label for="petDataHighlight">Choose Pet to Highlight:</label>
    <input  placeholder="Enter Customer ID" type="text" id="petDataHighlight">
    <button id="highlightRowBtn">Submit</button>

    
</div>
  
   
   
  

<!-- Footer -->
<?php include("./includes/footer.php"); ?>
    <script src="js/script.js"></script>
</body>
</html>

