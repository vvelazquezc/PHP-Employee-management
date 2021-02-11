<?php

/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

function addEmployee(array $newEmployee)
{
  // TODO implement it
}


function deleteEmployee(string $id)
{
  // TODO implement it
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


function getQueryStringParameters(): array
{
  // TODO implement it
}

function getNextIdentifier(array $employeesCollection): int
{
  // TODO implement it
}


function getAllEmployees()
{
  $json_employees = file_get_contents("../../resources/employees.json");
  return $json_employees;
}
