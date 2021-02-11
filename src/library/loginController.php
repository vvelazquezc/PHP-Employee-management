<?php
require("loginManager.php");
if (isset($_POST['uEmail']) && isset($_POST['uPassword'])) {
  $u_email = $_POST['uEmail'];
  $u_password = $_POST['uPassword'];
  if (validateUser($u_email, $u_password)) {
    $head =  "Refresh: 0; URL=../dashboard.php";
    header($head);
  } else {
    $head = "Refresh: 0; URL=../../index.php?error=Incorrect e-mail or password";
    header($head);
  }
} else if (isset($_GET['logout'])) {
  logOut();
  $head = "Refresh: 0; URL=../../index.php?error=Logout correctly";
  header($head);
} else if (isset($_GET['timeout'])) {
  logOut();
  $head = "Refresh: 0; URL=../../index.php?error=Your session has expired";
  header($head);
}
