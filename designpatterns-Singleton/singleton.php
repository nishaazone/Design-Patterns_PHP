<?php
class singleton {
    private static $instance = "null";
    private function __construct() {
        echo "Connect";
    }
    public static function showInstance() {
        if(self::$instance == "null") {
         self::$instance=new static();
       } else{
        echo 'Already connected';
       }
       return self::$instance;
    }
}
$obj1 = singleton::showInstance();
$obj1 = singleton::showInstance();
?>