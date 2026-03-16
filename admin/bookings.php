<?php
if(! isset($_SESSION['user'])) {
   //   header("Location: login.php");
  } // Check if session is created, if not redirect to login

// db connection
/*
$conn = new mysqli("localhost", "root", "", "transportdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle booking form
if (isset($_POST['create_booking'])) {
    $name   = $_POST['customer_name'];
    $route  = $_POST['route'];
    $date   = $_POST['booking_date'];
    $status = $_POST['status'];

    $stmt = $conn->prepare("INSERT INTO bookings (customer_name, route, booking_date, status) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $route, $date, $status);
    $stmt->execute();
    echo "<p>Booking created successfully!</p>";
    $stmt->close();
}

// Handle expense form
if (isset($_POST['add_expense'])) {
    $route   = $_POST['route'];
    $type    = $_POST['expense_type'];
    $amount  = $_POST['amount'];
    $date    = $_POST['expense_date'];

    $stmt = $conn->prepare("INSERT INTO expenses (route, expense_type, amount, expense_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $route, $type, $amount, $date);
    $stmt->execute();
    echo "<p>Expense added successfully!</p>";
    $stmt->close();
}

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Transport Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <div class="container mt-5">
        <!-- Form Section -->
        <h2 class="mb-4">Create Booking</h2>
        <form class="row g-3" id="createBookingForm">
            <div class="col-md-6">
            <label for="inputName" class="form-label">Customer Name:</label>
            <input type="text" class="form-control" name="customerName" id="customerName" placeholder="Enter your name">
            </div>
            <div class="col-md-6">
            <label for="route" class="form-label">Route:</label>
            <input type="text" class="form-control" name="route" id="route" placeholder="Enter your route">
            </div>
            <div class="col-md-6">
            <label for="bookingDate" class="form-label">Booking Date:</label>
            <input type="text" class="form-control" name="bookingDate" id="bookingDate" placeholder="Enter booking date">
            </div>
            <div class="col-md-6">
            <label for="inputCity" class="form-label">Rate</label>
            <input type="text" class="form-control" name="rate" id="rate" placeholder="70">
            </div>
            <div class="col-md-6">
            <label for="kuntal" class="form-label">Kuntal</label>
            <input type="text" class="form-control" name="kuntal" id="kuntal" placeholder="150">
            </div>
            <div class="col-md-6">
            <label for="bhada" class="form-label">Bhada</label>
            <input type="text" class="form-control" name="bhada" id="bhada" placeholder="10500">
            </div>
            <div class="col-12">
              <input type="hidden" value="CreateBooking" name="booking" id="booking">  
            <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>

        <!-- Table Section -->
        <h2 class="mt-5 mb-4">Registered Users</h2>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Route</th>
                <th scope="col">Booking Date</th>
                <th scope="col">Rate</th>
                <th scope="col">Kuntal</th>
                <th scope="col">Bhada</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
              <?php
              require_once 'bhatttransportdb.php';
              //Calling static method for geting bookings
              $bookings = bhatttransportdb::getBookings("SELECT * FROM bookings");
              foreach($bookings as $booking) { ?>
                  <tr>
                      <th scope='row'><?php echo $booking['id']; ?></th>
                      <td><?php echo $booking['customerName']; ?></td>
                      <td><?php echo $booking['route']; ?></td>
                      <td><?php echo $booking['rate']; ?></td>
                      <td><?php echo $booking['kuntal']; ?></td>
                      <td><?php echo $booking['bhada']; ?></td>
                      <td><?php echo $booking['bookingDate']; ?></td>
                      <td><input  class="btn btn-success" type="button" value="<?php echo $booking['status']; ?>"></td>
                  </tr>
              <?php } ?>
            </tbody>
        </table>
        </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $("#createBookingForm").on("submit", function(e) {
      e.preventDefault();
      $.ajax({
        url: "config.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(response) {
          if(response.trim() === "success") {
            alert("Booking created successfully!");
            // Redirect to admin dashboard or another page
            window.location.href = "dashboard.php"; // Change to your dashboard page
          } else {
            alert("Error creating booking: " + response);
          }
        }
      });
    });

$(document).ready(function(){
    $("#logoutLink").click(function(){
        $.ajax({
            url: "config.php",
            type: "GET",
            data: { logout: "TRUE" },
            success: function(response){
                alert("Logged out successfully!");
                window.location.href = "login.php"; // Redirect to login page after logout
            },
            error: function(){
                alert("Error sending data");
            }
        });
    });
});

  </script>
</body>
</html>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $("#createBookingForm").on("submit", function(e) {
      e.preventDefault();
      $.ajax({
        url: "config.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(response) { 
        if(response.trim() === "success") {
            alert("Booking created successfully!");
            // Redirect to admin dashboard or another page
            window.location.href = "dashboard.php"; // Change to your dashboard page
          } else {
            alert("Error creating booking: " + response);
          }
        }
      });
    });

$(document).ready(function(){
    $("#logoutLink").click(function(){
        $.ajax({
            url: "config.php",
            type: "GET",
            data: { logout: "TRUE" },
            success: function(response){
                alert("Logged out successfully!");
                window.location.href = "login.php"; // Redirect to login page after logout      
            },
            error: function(){
                alert("Error sending data");
            }
        });
    });
});

  </script>
</body>
</html>