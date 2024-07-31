<?php

// Component interface
interface Coffee {
    public function cost();
}

// Concrete component
class SimpleCoffee implements Coffee {
    public function cost() {
        return 10; // base cost of simple coffee
    }
}

// Decorator
abstract class CoffeeDecorator implements Coffee {
    protected $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function cost() {
        return $this->coffee->cost();
    }
}

// Concrete decorator 1
class MilkDecorator extends CoffeeDecorator {
    public function cost() {
        return $this->coffee->cost() + 5; // additional cost for milk
    }
}

// Concrete decorator 2
class SugarDecorator extends CoffeeDecorator {
    public function cost() {
        return $this->coffee->cost() + 2; // additional cost for sugar
    }
}

// Usage
$simpleCoffee = new SimpleCoffee();
echo "Cost of simple coffee: $" . $simpleCoffee->cost() . PHP_EOL;

$milkCoffee = new MilkDecorator($simpleCoffee);
echo "Cost of milk coffee: $" . $milkCoffee->cost() . PHP_EOL;

$sweetMilkCoffee = new SugarDecorator($milkCoffee);
echo "Cost of sweet milk coffee: $" . $sweetMilkCoffee->cost() . PHP_EOL;

?>