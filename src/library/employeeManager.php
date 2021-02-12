<?php

/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

function addEmployee($newEmployee)
{
  $employeesCollection = json_decode(file_get_contents("../../resources/employees.json"), true);
  $new_id = getNextIdentifier($employeesCollection);
  $newEmployee['id'] = strval($new_id);
  $employeesCollection[$new_id - 1] = $newEmployee;
  $data = json_encode($employeesCollection, JSON_PRETTY_PRINT);
  file_put_contents('users.json', $data);
}


function deleteEmployee($id)
{
  $data = json_decode(file_get_contents("../../resources/employees.json"), true);
  for ($i = 0; $i < count($data); $i++) {
    if ($data[$i]['id'] == $id) {
      $position = $i;
    }
  }
  unset($data[$position]);
  $data = array_values($data);
  for ($i = 0; $i < count($data); $i++) {
    $data[$i]['id'] = $i + 1;
  }
  $data = json_encode($data, JSON_PRETTY_PRINT);
  file_put_contents('users.json', $data); //TODO change path
}


function updateEmployee(array $updateEmployee)
{
  // TODO implement it
}


function getEmployee($id)
{

  $employees_json = file_get_contents("../resources/employees.json");
  $employees_array = json_decode($employees_json, true);
  foreach ($employees_array as $employee) {
    if ($employee['id'] == $id) {
      $result = $employee;
    }
  }
  return $result;
}


function removeAvatar($id)
{
  // TODO implement it
}


function getQueryStringParameters()
{
  parse_str(file_get_contents("php://input"), $query);
  return $query;
}

function getNextIdentifier($employeesCollection)
{
  return count($employeesCollection) + 1;
}


function getAllEmployees()
{
  $json_employees = file_get_contents("../../resources/employees.json");
  return $json_employees;
}
