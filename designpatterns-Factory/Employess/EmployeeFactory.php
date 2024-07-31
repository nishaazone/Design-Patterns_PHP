<?php
class EmployeeFactory {
    public static function createEmployee(String $employeeType) {
        if ($employeeType === "Android Developer") {
            return new AndroidDeveloper();
        } elseif ($employeeType === "Web Developer") {
            return new WebDeveloper();
        } else {
            return null;
        }
    }
}

?>