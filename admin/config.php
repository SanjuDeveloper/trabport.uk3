<?php

require_once 'bhatttransportdb.php';
$db = new bhatttransportdb();
$db->getConnection();
if(isset($_REQUEST['AdminLogin']) && $_REQUEST['AdminLogin'] == 'ADMIN_LOGIN'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // For demonstration, using hardcoded credentials. In production, use hashed passwords from the database.
    $valid_username = "admin";
    $valid_password = "Admin@123";
    $message = "";
    if($username === $valid_username && $password === $valid_password){
        $_SESSION['user'] = $username; // Set session variable to indicate admin is logged in    
        $message = "valid";
    } else {
         $message = "invalid";
    }
    echo $message;
}

// Handle booking form
if (isset($_POST['booking']) && $_POST['booking'] == 'CreateBooking') {
    print_r($_REQUEST);
    $name   = $_POST['customerName'];
    $route  = $_POST['route'];
    $rate   = $_POST['rate'];
    $kuntal = $_POST['kuntal'];
    $bhada  = $_POST['bhada'];
    $date   = $_POST['bookingDate'];
    $createBooking = $db->createBooking($name, $route, $rate, $kuntal, $bhada, $date);
    if ($createBooking) {
        echo "success";
    } else {
        echo $createBooking;
    }
}

// Handle logout
if (isset($_GET['logout']) && $_GET['logout'] == 'TRUE') {
    // Destroy session or perform any necessary cleanup
    session_destroy();
    echo "success";
}
?>