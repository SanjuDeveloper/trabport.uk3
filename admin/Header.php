<?php
if(! isset($_SESSION['user'])) {
   //   header("Location: login.php");
  } // Check if session is created, if not redirect to login
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Transport Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    body { font-family: Arial, sans-serif; margin:0; background:#f4f4f4; }
    .sidebar { width:200px; background:#333; color:#fff; height:100vh; float:left; }
    .sidebar a { display:block; padding:15px; color:#fff; text-decoration:none; }
    .sidebar a:hover { background:#444; }
    .main { margin-left:200px; padding:20px; }
    .card { background:#fff; padding:20px; margin:10px; display:inline-block; width:200px; box-shadow:0 2px 5px rgba(0,0,0,0.1); }
    table { width:100%; border-collapse:collapse; margin-top:20px; }
    table, th, td { border:1px solid #ccc; }
    th, td { padding:10px; text-align:left; }
  </style>

</head>
<body>
  <div class="sidebar">
    <h2><a href="../index.php">Transport</a></h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="bookings.php">Bookings</a>
    <a href="#">Vehicles</a>
    <a href="#">Drivers</a>
    <a href="#">Routes</a>
    <a href="#">Reports</a>
    <a href="#">Settings</a>
    <a href="#" id="logoutLink">logout</a>
  </div>
  