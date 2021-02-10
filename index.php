<!-- TODO Application entry point. Login view -->
<?php
$message = "";
if (isset($_GET['error'])) {
  if ($_GET['error'] == "login") {
    $message = "
      <div class='toast d-flex align-items-center text-white bg-primary border-0' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-body'>
          User or Email incorrect.
        </div>
      </div>";
  } else if ($_GET['error'] == "session") {
    $message = "
      <div class='toast d-flex align-items-center text-white bg-primary border-0' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-body'>
          Your session has expired.
        </div>
      </div>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee management V1</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body>
  <h1>LOG IN</h1>
  <?= $message ?>
  <form action="./src/library/loginController.php" method="post">
    <div class="mb-3">
      <label for="uEmail" class="form-label">Email address</label>
      <input type="email" class="form-control" id="uEmail" name="uEmail" aria-describedby="emailHelp" value="admin@assemblerschool.com">
    </div>
    <div class="mb-3">
      <label for="uPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="uPassword" name="uPassword">
      <!-- TODO: eliminar los values de los input password e input email. -->
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>

</html>