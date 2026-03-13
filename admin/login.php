
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Transport Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
    }
    .login-container {
      max-width: 400px;
      margin: 100px auto;
      padding: 30px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Transport Login</h2>
    <form id="loginForm">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" id="username" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" name="password" class="form-control" required>
      </div>
      <input type="hidden" value="ADMIN_LOGIN" name="AdminLogin" id="AdminLogin">
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    <div id="message" class="mt-3 text-center"></div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $("#loginForm").on("submit", function(e) {
      e.preventDefault();
      $.ajax({
        url: "config.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(response) { 
          if(response.trim() === "valid") {
            $("#message").html('<div class="alert alert-success">Login successful!</div>');
            window.location.href = "dashboard.php"; // Change to your dashboard page
          } else {
            $("#message").html('<div class="alert alert-danger">Invalid username or password.</div>');
          }
        }
      });
    });
  </script>
</body>
</html>