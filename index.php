<?php
    echo "<h1>Labb 1 - Anders Eriksson</h1>";

    // Get data from csv file into array
    $csv_data = array_map('str_getcsv', file("international-orders.csv"));
    echo "<pre>";
    var_dump($csv_data);
    echo "</pre>";
    echo "<br>";

    // Loop through the array to get values etc
    for($i=0; $i<sizeof($csv_data); $i++) {
        // Find IDs with 9 characters
        if(strlen($csv_data[$i][0]) == 9){
            // echo $i . ": " . "Success\n" . "<br>";

            // Get the full ID string into variable
            $id = $csv_data[$i][0];

            // Get country code from ID into variable
            $countryCode = substr($id, 0, 3);

            // Get quantity into variable
            $quantity = $csv_data[$i][1];

            // Get price into varialbe
            $price= $csv_data[$i][2];

            // Print to check the variables
            echo "Valid country code: " . $countryCode . "<br>";
            echo "Quantity: " . $quantity . "<br>";
            echo "Price: " . $price . "<br>";
        }
        else {
            // echo $i . ": " . "Not a valid country code. \n" . "<br>";
        }
        if($countryCode === "#FI"){
            echo "Finland q:" . $quantity;
        }
        $arrayCountryCodes[] = $countryCode;
        foreach($arrayCountryCodes as $cCode){
            $listCountryCodes = $cCode;
        } 
        
    }
    echo "<br>";
    echo $listCountryCodes;
   

    // Present valid country codes to the user
    // echo "Valid country codes are: #SE, #FI, #US, #DE, #ES, #RU, #NO, #IT, #GR, #FR, #PL<br>";

    $status = 0;

    // Calculate the total sum of prices from a chosen country
    function calculateCountrysTotalSum($countryCode) {
        if($countryCode === "#FI"){
            
        }

        else {
            echo "Failure! You have entered an invalid country code. Please try again.";
        }
    }

    // Call the function
    calculateCountrysTotalSum("#FI");
?>