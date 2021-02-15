<!-- Application entry point. Login view -->
<?php
if (isset($_GET['error'])) {
  $message = $_GET['error'];
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee management V1</title>
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/main.css">

</head>

<?= isset($message) ? "<div class='p-3 bg-correctly-ass text-white'>$message</div>" : "" ?>

<body class="text-center h-100">
  <main class="login-ass">
    <form class="form-signin" action="./src/library/loginController.php" method="post">
      <img class="" src="./assets/images/logo_AS2.png" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <input type="email" id="uEmail" name="uEmail" class="mb-2  form-control" aria-describedby="emailHelp" required value="admin@assemblerschool.com">
      <input type="password" id="uPassword" class="mb-3  form-control" placeholder="Password" name="uPassword" required>
      <button class="w-100 btn btn-lg btn-ass-submit" type="submit">Sign in</button>
    </form>
  </main>

  <script src="./node_modules/jquery/dist/jquery.min.js"></script>
  <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>