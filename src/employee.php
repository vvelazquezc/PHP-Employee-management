<?php

session_start();

if (isset($_SESSION["id"])){
  require("./library/sessionHelper.php");
}else{
  header("Refresh: 0; URL=../index.php?error=session");
  exit();
}

?>
