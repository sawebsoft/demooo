<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="d-flex">
  <div id="car">
    
  </div>

<div class="container mt-3 text-white" >
 <div class="row" style="margin-top:100px;">
 <div class="col-sm-4 m-auto">
 <form action="action_page.php" method="post" class="form-login" id="car">
  <h2 class="text-center">Admin Login</h2>
    <div class="mb-3 mt-3">
      <label for="User Email">User Email:</label>
      <input type="email" class="form-control" id="adminemail" placeholder="Enter User Email" name="adminemail"  required>
    </div>
    <div class="mb-3">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="adminpassword" placeholder="Enter password" name="adminpassword">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary w-100">Login</button>
  </form>
 </div>
 </div>

</div>

</body>
</html>
