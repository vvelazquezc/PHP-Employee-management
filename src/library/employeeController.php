<?php

switch ($_SERVER['REQUEST_METHOD']) {
  case "GET":
    if (isset($_REQUEST['employeeList'])) {
      require('./employeeManager.php');
      header('Content-Type: application/json');
      echo getAllEmployees();
    } else if (isset($_REQUEST['employeeId'])) {
      require('./library/employeeManager.php');
      $employee = getEmployee($_GET['employeeId']);
    }
}
