<?php
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
<html>
<head>
    <title>Transport Dashboard</title>
    <style>
        body { font-family: Arial; margin:20px; }
        form { background:#f9f9f9; padding:20px; margin-bottom:20px; border:1px solid #ccc; }
        input, select { margin:5px 0; padding:8px; width:100%; }
        button { padding:10px 15px; background:#333; color:#fff; border:none; cursor:pointer; }
        button:hover { background:#555; }
    </style>
</head>
<body>
    <h1>Transport Dashboard</h1>

    <!-- Booking Form -->
    <h2>Create Booking</h2>
    <form method="POST">
        <label>Customer Name:</label>
        <input type="text" name="customer_name" required>

        <label>Route:</label>
        <input type="text" name="route" required>

        <label>Booking Date:</label>
        <input type="date" name="booking_date" required>

        <label>Status:</label>
        <select name="status">
            <option value="Confirmed">Confirmed</option>
            <option value="Pending">Pending</option>
            <option value="Cancelled">Cancelled</option>
        </select>

        <button type="submit" name="create_booking">Create Booking</button>
    </form>

    <!-- Expense Form -->
    <h2>Add Expense</h2>
    <form method="POST">
        <label>Route:</label>
        <input type="text" name="route" required>

        <label>Expense Type:</label>
        <input type="text" name="expense_type" required>

        <label>Amount:</label>
        <input type="number" step="0.01" name="amount" required>

        <label>Expense Date:</label>
        <input type="date" name="expense_date" required>

        <button type="submit" name="add_expense">Add Expense</button>
    </form>
</body>
</html>