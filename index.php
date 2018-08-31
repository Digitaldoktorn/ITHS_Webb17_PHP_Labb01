<?php
    // Se alla fel under development.
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    echo "<h1>Labb 1 - Anders Eriksson</h1>";

    // Calculate the total sum of prices from a chosen country
    function calculateCountrysTotalSum($userCountryCode) {

        $price = 0;
        $quantity = 0;
        $status = 0;
        $id;
        $countryCode;
        $totalSumFi = 0;

        // Get data from csv file into array
        $csv_data = array_map('str_getcsv', file("international-orders.csv"));
        // echo "<pre>";
        // var_dump($csv_data);
        // echo "</pre>";

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
                    if($countryCode === $userCountryCode){
                        $totalSumFi += $price * $quantity;
                        echo $totalSumFi;
                    }
                    else {
                        echo " error</br>";
                    } 
                    echo "<br>------</br>";           
                }
            }
    }

    // echo "Total sum Finland: " . $totalSumFi . ":-<br>";

    // Call the function
    calculateCountrysTotalSum("#EN");
?>