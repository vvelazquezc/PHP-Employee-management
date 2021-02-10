<?php
require("loginManager.php");
if (isset($_POST['uEmail']) && isset($_POST['uPassword'])) {
  $u_email = $_POST['uEmail'];
  $u_password = $_POST['uPassword'];
  echo validateUser($u_email, $u_password);
}
