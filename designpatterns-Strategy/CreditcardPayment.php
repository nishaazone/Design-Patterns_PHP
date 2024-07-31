<?php

include 'paymentStrategy.php';
class CreditcardPayment implements PaymentStrategy{
    private $creditCardNumber;

    public function __construct($creditCardNumber){
        $this->cardNumber = $creditCardNumber;
}

    public function pay($amount){
        echo "Paid $amount via credit card with number $this->creditCardNumber\n";
    }
}
?>