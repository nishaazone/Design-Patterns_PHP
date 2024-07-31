<?php
class CarFactory{
    public static function createCar(String $carType){
        if($carType === "Sedan"){
            return new Sedan();
        } else if($carType === "SUV"){
            return new SUV();
        } else if($carType === "Indica"){
            return new Indica();
        } else {
            return null;
        }
    }
}

?>