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

<?php

function displayRow($pets) {
    
    $row = "";
    $row .= '<div class="w3-content"> ';
    $row .= '<table class="styled-table"> ';
    $row .= '<thead> ';
    $row .= '<tr> ';
    $row .= '<th>Picture</th> ';
    $row .= '<th>Customer ID</th> ';
    $row .= '<th>Pet Name</th> ';
    $row .= '<th>Owner Last Name</th> ';
    $row .= '<th>Owner First Name</th> ';
    $row .= '<th>Owner Email</th> ';
    $row .= '<th>Owner Cell/Phone</th> ';
    $row .= '<th>Allergies? Y/N</th> ';
    $row .= '<th>Aggressive? Y/N</th>';
    $row .= '</tr>';
    $row .= '</thead>';
    $row .= '<tbody>';
     
    
    foreach ($pets as $pet)  {
        if ($pet['activeRow'] == 'YES'){
            $row .= "<tr class='active-row'>";
        } else {
             $row .= "<tr>";
        }
       
        $row .= "<td><img src='images/{$pet['imageName']}' height='50px' /></td>";
         
        $row .= "<td>{$pet['customerID']}</td>";
         
        $row .= "<td>{$pet['petName']}</td>";
         $row .= "<td>{$pet['ownerFirstName']}</td>";
         $row .= "<td>{$pet['ownerLastName']}</td>";
         $row .= "<td>{$pet['email']}</td>";
         $row .= "<td>{$pet['cell']}</td>";
         $row .= "<td>{$pet['Allergies']}</td>";
         $row .= "<td>{$pet['Aggressive']}</td>";
    }
    $row .= "</tr>";
    $row .= '</tbody>';
    $row .= '</table>';
    $row .= '</div>';
   
    return $row;
}
    
    ?>