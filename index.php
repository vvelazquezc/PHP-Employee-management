<!-- Application entry point. Login view -->
<?php
$message = "";
if (isset($_GET['error'])) {
  if ($_GET['error'] == "login") {
    $message = "<div class='p-3 mb-2 bg-primary text-white'>Incorrect e-mail or password</div>";
  } else if ($_GET['error'] == "session") {
    $message = "<div class='p-3 mb-2 bg-primary text-white'>Your session has expired!.</div>";
  }
} else if (isset($_GET['logout'])) {
  $message = "<div class='p-3 mb-2 bg-primary text-white'>Logout correctly!.</div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee management V1</title>
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">

</head>

<?= $message ?>

<body class="text-center">
  <main class="form-signin">
    <form action="./src/library/loginController.php" method="post">
      <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <label for="uEmail" class="visually-hidden">Email address</label>
      <input type="email" id="uEmail" name="uEmail" class="form-control" aria-describedby="emailHelp" required value="admin@assemblerschool.com">
      <label for="uPassword" class="visually-hidden">Password</label>
      <input type="password" id="uPassword" class="form-control" placeholder="Password" name="uPassword" required>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
  </main>

  <script src="./node_modules/jquery/dist/jquery.min.js"></script>
  <script src="./node_modules/popper.js/dist/popper.min.js"></script>
  <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>