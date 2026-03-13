<?php
  if(! isset($_SESSION['user'])) {
    //header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Transport Dashboard</title>
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

  <div class="main">
    <h1>Dashboard</h1>
    <div class="card">🚍 Vehicles: 120</div>
    <div class="card">👨‍✈️ Drivers: 80</div>
    <div class="card">📦 Bookings: 45</div>
    <div class="card">🛣️ Routes: 12</div>
    <div class="card">💰 Revenue: $25,000</div>

    <h2>Recent Bookings</h2>
    <table>
      <tr><th>ID</th><th>Customer</th><th>Route</th><th>Status</th></tr>
      <tr><td>101</td><td>Alice</td><td>Agra → Delhi</td><td>Confirmed</td></tr>
      <tr><td>102</td><td>Bob</td><td>Delhi → Jaipur</td><td>Pending</td></tr>
    </table>
  </div>

</body>
</html>