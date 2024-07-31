<?php
require_once 'Employee.php';
require_once 'AndroidDeveloper.php';
require_once 'WebDeveloper.php';
require_once 'EmployeeFactory.php';  

$empFactory = new EmployeeFactory();
$androidDeveloper = $empFactory->createEmployee("Android Developer");
$webDeveloper = $empFactory->createEmployee("Web Developer");

echo 'Salary of Android Developer is: ' . $androidDeveloper->Salary() . "\n";
echo 'Salary of Web Developer is: ' . $webDeveloper->Salary() . "\n";
?>