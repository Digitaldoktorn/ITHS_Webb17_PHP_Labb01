<?php
    // Check errors during development.
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    echo "<h1>Labb 1 - Anders Eriksson</h1>";

    // Calculate the total sum of prices from a chosen country
    function calculateCountrysTotalSum($userCountryCode) {

        $price = 0;
        $quantity = 0;
        $status;
        $id;
        $countryCode;
        $totalSum = 0;
        $found = FALSE;

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
                    $countryCode = substr($id, 0, 3);//ändra 3 till 2 - lägg värdet i en variabel, se ovan
    
                    // Get quantity into variable
                    $quantity = $csv_data[$i][1];
    
                    // Get price into variable
                    $price= $csv_data[$i][2];

                    // Print to check the variables
                    // echo "Valid country code: " . $countryCode . "<br>";
                    // echo "Quantity: " . $quantity . "<br>";
                    // echo "Price: " . $price . "<br>";

                    // Compare input country code with existing country codes, calculate total sum
                    if($countryCode === $userCountryCode){ 
                        $totalSum += $price * $quantity;
                        $found = TRUE;
                    }
                }
                // set statuses
                if($found){
                    $status = "Success";
                }
                else {
                    $status = "Failure";    
                }
                
            }
            
            if($status === "Success"){
                // Print to check
                // echo $status . ", " . $userCountryCode . ", " . $totalSum;
                
                // Print data to csv files
                $fileHandle = fopen($userCountryCode . "-" . date("Ymd-his") . ".csv", "a");
                fwrite($fileHandle, $status . ", " . $userCountryCode . ", " . $totalSum );
            }
            if($status === "Failure"){
                echo "Error! You have entered an invalid country code. Valid country codes are: <br>" .  "#SE, #FI, #US, #DE, #ES, #RU, #NO, #IT, #GR, #FR, #PL<br>" . "Please try again.";
            }      
    }

    // Call the function
    calculateCountrysTotalSum("#ES");
?>