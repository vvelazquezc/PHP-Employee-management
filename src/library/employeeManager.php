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

    $employees = json_decode(getAllEmployees(), true);
    foreach($employees as $employee) {
        if ($employee['id'] == $id) {
            $result = array(
                ['name'] => $employee['name'],
                ['lastName'] => $employee['lastName'],
                ['email'] => $employee['email'],
                ['gender'] => $employee['gender'],
                ['city'] => $employee['city'],
                ['streetAddress'] => $employee['streetAddress'],
                ['state'] => $employee['state'],
                ['age'] => $employee['age'],
                ['postalCode'] => $employee['postalCode'],
                ['phoneNumber'] => $employee['phoneNumber']
            );
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


function getAllEmployees(){
    $json_employees = file_get_contents("../../resources/employees.json");
    return $json_employees;
}