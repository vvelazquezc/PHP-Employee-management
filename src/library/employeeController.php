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
    // $query = getQueryStringParameters();
    $_REQUEST['id'] = getNextIdentifier(json_decode(getAllEmployees(), true));
    isset($_REQUEST['lastName'])? $_REQUEST['lastName'] : $_REQUEST['lastName'] = "";
    isset($_REQUEST['gender'])? $_REQUEST['gender'] : $_REQUEST['gender'] = "";

    addEmployee($_REQUEST);
    echo $_REQUEST['id'];
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
