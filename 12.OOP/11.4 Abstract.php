<?php
abstract class PaymentGateway {
    abstract public function pay($amount);
}
class Paypal extends PaymentGateway {
    public function pay($amount) {
        echo "Paid $$amount via PayPal\n";
    }
}
class Stripe extends PaymentGateway{
    public function pay($amount) {
        echo "Paid $$amount via Stripe\n"; 
    }
}

class Bkash extends PaymentGateway {
    public function pay($amount){
        echo "Paid $$amount via Bkash\n"; 
    }
}

$paypal = new PayPal();
$paypal->pay(100);
$stripe = new Stripe();
$stripe->pay(200);
$bkash = new Bkash();
$bkash->pay(300);