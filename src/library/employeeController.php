<?php

require('./employeeManager.php');

switch ($_SERVER['REQUEST_METHOD']) {

    case "GET":

        if (isset($_REQUEST['employeeList'])) {

            header('Content-Type: application/json');
            echo getAllEmployees();
        }
}
