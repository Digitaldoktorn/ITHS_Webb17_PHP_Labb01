<?php
    echo "<h1>Labb 1 - Anders Eriksson</h1>";

    // get data from csv file into array
    $csv_data = array_map('str_getcsv', file("international-orders.csv"));
    echo "<pre>";
    var_dump($csv_data);
    echo "</pre>";

    $id;
    // get id

    
    // calculate the total sum of prices from a chosen country
    function calculateTotalSum($id) {
        if($id){
            // get price
            // loop price and get sum
            // print data to csv file - Success, SE, total sum
        }

    }

    // call the function
    calculateTotalSum("#SE");
?>