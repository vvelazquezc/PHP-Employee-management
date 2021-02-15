<?php

require('employeeManager.php');

if(isset($_REQUEST['_method'])) {
  $_SERVER['REQUEST_METHOD'] = $_REQUEST['_method'];
  array_splice($_REQUEST, array_search('_method', array_keys($_REQUEST)), 1);
}

switch ($_SERVER['REQUEST_METHOD']) {

  case "GET":
    if (isset($_REQUEST['employeeList'])) {
      header('Content-Type: application/json');
      echo getAllEmployees();
    }
    if (isset($_REQUEST['employeeId'])) {
      $employee = getEmployee($_GET['employeeId']);
    }
    break;

  case "POST":
    $_REQUEST['id'] = getNextIdentifier(json_decode(getAllEmployees(), true));

    if (isset($_REQUEST['employeePage'])) {
      array_splice($_REQUEST, array_search('employeePage', array_keys($_REQUEST)), 1);
      addEmployee($_REQUEST);
      header('Location: ../dashboard.php');
      exit;
    } else {
      $_REQUEST['lastName'] = "";
      $_REQUEST['gender'] = "";
      $_REQUEST['avatar'] = "../assets/images/no-user.png";
      addEmployee($_REQUEST);
      header('Content-Type: application/json');
      echo json_encode($_REQUEST['id']);
    }
    break;

  case "PUT":
    $query = getQueryStringParameters();
    if (isset($query['employeePage'])) {
      updateEmployee($query);
      header('Location: ../dashboard.php');
      exit;
    } else {
      updateEmployee($query);
    }
    break;

  case "DELETE":
    $query = getQueryStringParameters();
    deleteEmployee($query['data']);
    break;
}
