<?php

include 'observer.php';
include 'concreteSubject.php';
class ConcreteObserver implements Observer {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update($state) {
        echo "Observer {$this->name} updated with state: {$state}\n";
    }
}

// Example usage
$subject = new ConcreteSubject();

$observer1 = new ConcreteObserver("Observer 1");
$observer2 = new ConcreteObserver("Observer 2");

$subject->addObserver($observer1);
$subject->addObserver($observer2);

$subject->setState(1);

$subject->removeObserver($observer1);

$subject->setState(2);
?>