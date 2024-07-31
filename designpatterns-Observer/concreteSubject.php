<?php

include 'subject.php';
class ConcreteSubject implements Subject{

    private $state;
    private $observers = [];

    public function setState($state){
        $this->state = $state;
        $this->notifyObservers();
    } 

    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->update($this->state);
        }
    }

}
?>