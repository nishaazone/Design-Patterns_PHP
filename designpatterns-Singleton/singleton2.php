<?php
class Singleton {
    private static $instance;

    // Private constructor to prevent instantiation from outside the class
    private function __construct() {
        echo "Connect";
    }

    // Public method to get the singleton instance
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }else{
            echo 'Already connected';
           }

        return self::$instance;
    }

    // Example method
    public function someMethod() {
        return "Hello from Singleton!";
    }
}

// Example of using the Singleton class
$singletonInstance = Singleton::getInstance();
$singletonInstance = Singleton::getInstance();

echo $singletonInstance->someMethod();
?>