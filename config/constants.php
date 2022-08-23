
<?php
    //Create constants to store non Repeating  values
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'sqlniru');
    define('DB_PASSWORD', 'Demo_pw9');
    define('DB_NAME', 'food_order');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); // Database connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); // Selecting Database

?>
