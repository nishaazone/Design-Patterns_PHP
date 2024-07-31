<?php

include 'CreditcardPayment.php';
// include 'paymentStrategy.php';
include 'PaypalPayment.php';

class ShoppingCart {
    private $paymentStrategy;

    public function setPaymentStrategy(PaymentStrategy $paymentStrategy) {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function checkout($amount) {
        $this->paymentStrategy->pay($amount);
    }
}


$creditCardPayment = new CreditCardPayment("1234-5678-9012-3456");
$payPalPayment = new PayPalPayment("user@example.com");

$cart = new ShoppingCart();

// Use credit card payment strategy
$cart->setPaymentStrategy($creditCardPayment);
$cart->checkout(100.50);

// Use PayPal payment strategy
$cart->setPaymentStrategy($payPalPayment);
$cart->checkout(50.25);

?>