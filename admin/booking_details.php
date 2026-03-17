<?php
if(! isset($_SESSION['user'])) {
   //   header("Location: login.php");
  } // Check if session is created, if not redirect to login

   require_once 'bhatttransportdb.php';
              //Calling static method for geting bookings
              $bookings = bhatttransportdb::getBookings("SELECT * FROM bookings WHERE id=".$_GET['id']);
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
        <form class="row g-3" >
            <div class="col-md-6">
            <label for="inputName" class="form-label">Customer Name:</label>
            <input type="text" class="form-control" name="customerName" id="customerName" placeholder="Enter your name" value="<?php echo $bookings[0]['customerName']; ?>">
            </div>
            <div class="col-md-6">
            <label for="route" class="form-label">Route:</label>
            <input type="text" class="form-control" name="route" id="route" placeholder="Enter your route" value="<?php echo $bookings[0]['route']; ?>">
            </div>
            <div class="col-md-6">
            <label for="bookingDate" class="form-label">Booking Date:</label>
            <input type="text" class="form-control" name="bookingDate" id="bookingDate" placeholder="Enter booking date" value="<?php echo $bookings[0]['bookingDate']; ?>">
            </div>
            <div class="col-md-6">
            <label for="inputCity" class="form-label">Rate</label>
            <input type="text" class="form-control" name="rate" id="rate" placeholder="70" value="<?php echo $bookings[0]['rate']; ?>">
            </div>
            <div class="col-md-6">
            <label for="kuntal" class="form-label">Kuntal</label>
            <input type="text" class="form-control" name="kuntal" id="kuntal" placeholder="150" value="<?php echo $bookings[0]['kuntal']; ?>">
            </div>
            <div class="col-md-6">
            <label for="bhada" class="form-label">Bhada</label>
            <input type="text" class="form-control" name="bhada" id="bhada" placeholder="10500" value="<?php echo $bookings[0]['bhada']; ?>">
            </div>
             <div class="col-md-6">
            <label for="Driver's expense" class="form-label">Driver's expense</label>
            <input type="text" class="form-control" name="Driver's expense" id="Driver's expense" placeholder="Enter value here" value="">
            </div>
             <div class="col-md-6">
            <label for=" Vehicle  expense" class="form-label"> Vehicle  expense</label>
            <input type="text" class="form-control" name=" Vehicle  expense" id=" Vehicle  expense" placeholder="enter value here" value="">
            </div>
             <div class="col-md-6">
            <label for=" Payment type" class="form-label">Payment type</label>
            <select class="form-select" name="Payment type" id="Payment type">
              <option value="Cash">Cash</option>
              <option value="Credit Card">Credit Card</option>
              <option value="Mobile Payment">Mobile Payment</option>
            </select>
            </div>
         

            <div class="col-12">
              <input type="hidden" value="CreateBooking" name="booking" id="booking">  
            <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>


        <!-- Table Section -->
        <h2 class="mt-5 mb-4">Bookings</h2>
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
                      <td><a href="booking_details.php?id=<?php echo $booking['id']; ?>"><?php echo $booking['customerName']; ?></a></td>
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
</body>
</html>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>