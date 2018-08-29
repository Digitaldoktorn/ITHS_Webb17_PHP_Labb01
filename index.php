<?php
    echo "<h1>Labb 1 - Anders Eriksson</h1>";

    // Get data from csv file into array
    $csv_data = array_map('str_getcsv', file("international-orders.csv"));
    echo "<pre>";
    var_dump($csv_data);
    echo "</pre>";
    echo "<br>";

    // Testar bara array values
    // print_r(array_values($csv_data));

    // Loop through the array to get values etc
    for($i=0; $i<sizeof($csv_data); $i++) {
        // Find IDs with 9 characters
        if(strlen($csv_data[$i][0]) == 9){
            // echo $i . ": " . "Success\n" . "<br>";

            // Get the full ID string into variable
            $id = $csv_data[$i][0];

            // Get country code from ID into variable
            $countryCode = substr($id, 0, 3);

            // Print to check valid country codes
            echo "Valid country code: " . $countryCode . "<br>";
        }
        else {
            echo $i . ": " . "Failure\n" . "<br>";
        }
    }
    echo "<br>";

    // Calculate the total sum of prices from a chosen country
    function calculateCountrysTotalSum($countryCode) {
        if($countryCode === "#FI"){
            echo "This is FI";
            // get price
            // loop price and get sum
            // print data to csv file - Success, SE, total sum
        }
        else {
            echo "You have entered an invalid country code. Please try again.";
        }
    }

    // Call the function
    calculateCountrysTotalSum("#KK");
?>