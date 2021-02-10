<?php
require("loginManager.php");
if (isset($_POST['uEmail']) && isset($_POST['uPassword'])) {
  $u_email = $_POST['uEmail'];
  $u_password = $_POST['uPassword'];
  if (validateUser($u_email, $u_password)) {
    $head =  "Refresh: 0; URL=../dashboard.php";
    header($head);
  } else {
    $head = "Refresh: 0.2; URL=../../index.php?error=login";
    header($head);
  }
}
