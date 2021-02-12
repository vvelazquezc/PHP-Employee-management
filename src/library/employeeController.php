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
    header('Content-Type: application/json');
    $_REQUEST['id'] = getNextIdentifier(json_decode(getAllEmployees(), true));
    isset($_REQUEST['lastName']) ? $_REQUEST['lastName'] : $_REQUEST['lastName'] = "";
    isset($_REQUEST['gender']) ? $_REQUEST['gender'] : $_REQUEST['gender'] = "";
    addEmployee($_REQUEST);
    if (isset($_REQUEST['employeePage'])) {
      header('Location: dashboard.php');
    } else {
      header('Content-Type: application/json');
      echo json_encode($_REQUEST['id']);
    }
    break;

  case "PUT":
    header('Content-Type: application/json');
    $query = getQueryStringParameters();
    if (isset($query['employeePage'])) {
      unset($query['employeePage']);
      $query = array_values($query);
      updateEmployee($query);
    } else {
      updateEmployee($query);
    }
    break;

  case "PATCH":
    break;

  case "DELETE":
    $query = getQueryStringParameters();
    deleteEmployee($query['data']);
    break;
}
