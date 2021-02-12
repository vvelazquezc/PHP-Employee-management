<?php

require('employeeManager.php');
switch ($_SERVER['REQUEST_METHOD']) {
  case "GET":
    if (isset($_REQUEST['employeeList'])) {
      header('Content-Type: application/json');
      echo getAllEmployees();
    } else if (isset($_REQUEST['employeeId'])) {
      $employee = getEmployee($_GET['employeeId']);
    }
    break;
  case "POST":
    $query = getQueryStringParameters();
    addEmployee($query);
    break;
  case "PUT":
    break;
  case "PATCH":
    break;
  case "DELETE":
    $query = getQueryStringParameters();
    deleteEmployee($query['data']);
    break;
}
