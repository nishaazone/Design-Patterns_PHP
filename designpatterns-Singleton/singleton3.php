<?php
   class singleton{
    private static $instance = null;

    public function __construct(){
        echo "Call 1";
   }
   public static function getInstance(){
    if(self::$instance == null){
        self::$instance =  new self();
    } else {
        echo 'Already exists';
    }
    return self::$instance;
}
}
$obj1 =  singleton::getInstance();
$obj1 =  singleton::getInstance();


?>