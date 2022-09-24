<?php

/**
 * We will use Dummy REST API Example website to work with live API data in our examples.
 * This website provides a number of routes or URLs to read, create, update, delete data using API.
 * We will use the following to read employees data.
 */


// strore api url in $api_url variabl
$api_url = 'https://dummy.restapiexample.com/api/v1/employees';


/**
 * PHP inbuilt file_get_contents() functions is used to read a file into a string.
 * This can read any file or API data using URLs and store data in a variable.
 * This function is the easiest method to read any data by passing API URL.
 */

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$resoponse_data = json_decode($json_data);



echo "<ul>";
foreach ($resoponse_data->data as $usr_data)
{
    echo "{$usr_data->id} = " . $usr_data->employee_name;
    echo "<br>";
    echo "salary = " . $usr_data->employee_salary;
    echo "<br>";
    print("age = $usr_data->employee_age");
    echo "<br><br>";
}
echo "</ul>";