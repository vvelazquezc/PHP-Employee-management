<?php

session_start();

if (isset($_SESSION["id"])) {
  require("./library/sessionHelper.php");
} else {
  header("Refresh: 0; URL=../index.php?error=session");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/main.css">
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../node_modules/jsgrid/css/theme.css"></link>
  <link rel="stylesheet" href="../node_modules/jsgrid/css/jsgrid.css"></link>
  <title>Dashborad</title>
</head>

<body>
  <?php
  require("../assets/html/header.html");
  ?>
  <main id="main-wrapper"></main>

  <?php
  require("../assets/html/footer.html");
  ?>

  <script src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../node_modules/popper.js/dist/popper.min.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../node_modules/jsgrid/dist/jsgrid.min.js"></script>
  <script src="../assets/js/index.js" type="module"></script>
</body>

</html>