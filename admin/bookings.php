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
  
  <div class="main">
        <div class="container mt-5">
        <!-- Form Section -->
        <h2 class="mb-4">Create Booking</h2>
        <form class="row g-3" id="createBookingForm">
            <div class="col-md-4">
              <label for="inputName" class="form-label">Customer Name:</label>
              <input type="text" class="form-control" name="customerName" id="customerName" placeholder="Enter your name" >
            </div>
            <div class="col-md-4">
              <label for="inputName" class="form-label">Driver Name:</label>
              <input type="text" class="form-control" name="driverName" id="driverName" placeholder="Enter driver's name" >
            </div>
            <div class="col-md-4">
              <label for="inputName" class="form-label">vehical Number:</label>
              <select class="form-select" name="vehical_number" id="vehical_number">
                <option selected disabled>-- select vehical number --</option>
                <option value="UK05CA1508">UK05CA1508</option>
                <option value="UK03CA1839">UK03CA1839</option>
              </select>
            </div>
             <div class="col-md-4">
              <label for="route" class="form-label">Route:</label>
              <input type="text" class="form-control" name="route" id="route" placeholder="Enter your route" >
            </div>
            

            <div class="col-md-4">
            <label for="bookingDate" class="form-label">Booking Date:</label>
            <input type="datetime-local" class="form-control" name="bookingDate" id="bookingDate" value="<?php echo date("Y-m-d\TH:i"); ?>" >
            </div>
            <div class="col-md-4">
            <label for="inputCity" class="form-label">Rate</label>
            <input type="text" class="form-control" name="rate" id="rate" placeholder="enter rate" >
            </div>
            <div class="col-md-4">
            <label for="kuntal" class="form-label">Kuntal</label>
            <input type="text" class="form-control" name="kuntal" id="kuntal" placeholder="150" >
            </div>
            <div class="col-md-4">
            <label for="bhada" class="form-label">Bhada</label>
            <input type="text" class="form-control" name="bhada" id="bhada" placeholder="10500" >
            </div>
             <div class="col-md-4">
            <label for="total_rent" class="form-label">Total Rent</label>
            <input type="text" class="form-control" name="total_rent" id="total_rent" placeholder="105" >
            </div>
             <div class="col-md-4">
            <label for="rent_status" class="form-label">Rent Status</label>
            <select class="form-select" name="rent_status" id="rent_status">
             <option selected disabled>-- select  rent status--</option>  
            <option value="paid">paid</option>
            <option value="unpaid">- Unpaid</option>
            </select>
                      </div>
          
                <div class="col-md-4">
            <label for="Payment_type" class="form-label">Payment type</label>
            <select class="form-select" name="Payment_type" id="Payment_type">
             <option selected disabled>-- select  payment type--</option>  
            <option value="Cash">Cash</option>
            <option value="Mobile Payment">Mobile Payment</option>
            </select>
            </div>
         
            
            <div class="col-md-4">
            <label for="total_driver_expense" class="form-label">Total Driver Expense</label>
            <input type="hidden" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="OpenModal">
            <input type="text" class="form-control" name="total_driver_expense" id="total_driver_expense" placeholder="cash">
            </div>
            <div class="col-md-4">
            <label for="total_vehicle_expense" class="form-label">Total Vehicle Expense</label>
            <input type="text" class="form-control" name="total_vehicle_expense" id="total_vehicle_expense" placeholder="type">
            </div>
            <div class="col-md-4">
            <label for="driver_expense_type" class="form-label">Driver Expense Type</label>
            <input type="text" class="form-control" name="driver_expense_type" id="driver_expense_type" placeholder="type">
            </div>
            <div class="col-md-4">
            <label for="vehicle_expense_type" class="form-label">Vehicle Expense Type</label>
            <input type="text" class="form-control" name="vehicle_expense_type" id="vehicle_expense_type" placeholder="type">
            </div>
            <div class="col-md-4">
            <label for="goods_owner" class="form-label">Goods Owner</label>
            <input type="text" class="form-control" name="goods_owner" id="goods_owner" placeholder="Enter goods owner">
            </div>
            <div class="col-md-4">
            <label for="loading_time" class="form-label">Loading Time</label>
            <input type="datetime-local" class="form-control" name="loading_time" id="loading_time" value="<?php echo date("Y-m-d\TH:i"); ?>" >
            </div>
            <div class="col-md-4">
            <label for="unloading_time" class="form-label">Unloading Time</label>
            <input type="datetime-local" class="form-control" name="unloading_time" id="unloading_time" value="<?php echo date("Y-m-d\TH:i"); ?>" >
            </div>
            <div class="col-md-4">
            <label for="seller_name" class="form-label">Seller Name</label>
            <input type="text" class="form-control" name="seller_name" id="seller_name" placeholder="Enter seller name">
            </div>
            <div class="col-md-4">
            <label for="driver_name" class="form-label">Payment Receiver</label>
            <input type="text" class="form-control" name="payment_receiver" id="payment_receiver" placeholder="Enter payment receiver name">
            </div>
             <div class="col-md-4">
             <label for="loading_unloading_status" class="form-label">Loading/Unloading Status</label>
            <select class="form-select" name="loading_unloading_status" id="loading_unloading_status">
             <option selected disabled>-- select  status type--</option>  
            <option value="Loading">Loading</option>
            <option value="Unloading">Unloading</option>
            </select>
            </div>
            <div class="col-12">
              <input type="hidden" value="CreateBooking" name="booking" id="booking">  
            <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>

        
        </div>
        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control" name="payment_receiver" id="payment_receiver" placeholder="Enter Payment Receiver Name">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</body>
</html>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <script>
    /*
    $(document).ready(function(){
      $("#Payment_type").on("change", function(){
        if ($("#Payment_type option:selected").text() == "Cash") {
         $("#OpenModal").click();
        } 
      });
    });*/
/*
      $("#createBookingForm").on("submit", function(e) {
      e.preventDefault();
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: "config.php",
            type: "POST",
            data: $(this).serialize(),
            success: function(response) {
              if(response.trim() === "success") {
                Swal.fire({
                  title: "Created!",
                  text: "Booking has been created.",
                  icon: "success"
                });
                // Redirect to admin dashboard or another page
                window.location.href = "dashboard.php"; // Change to your dashboard page
              } else {
                alert("Error creating booking: " + response);
              }
            }
          });
        }
      });
    }); 

*/
  
 
 $("#createBookingForm").on("submit", function(e) {
      alert("Form submitted");
      //alert($("#vehical_number option:selected").text());
      $.ajax({
            url: "config.php",
            type: "POST",
            data: {
              vehical_number: $("#vehical_number option:selected").text(),
              CheckLoadingStatus: true
            },
            success: function(response) {
              console.log(response);
              alert(response);
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