<?php

// include 'paymentStrategy.php';
class PayPalPayment implements PaymentStrategy{
    private $email;

    public function __construct($email){
     $this->email = $email;
}

    public function pay($amount){
        echo "Paid $amount via PayPal with email $this->email\n";
    }
}
?>