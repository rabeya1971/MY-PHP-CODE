<?php
interface PaymentGateway {
   public function pay($amount);
//    public function refund();
}
class Paypal implements  PaymentGateway {
    public function pay($amount) {
        echo "Paid $$amount via PayPal\n";
    }
    // public function refund(){}
    
}
class Stripe implements PaymentGateway{
    public function pay($amount) {
        echo "Paid $$amount via Stripe\n"; 
    }
    // public function refund(){}
}


$paypal = new PayPal();
$paypal->pay(100);
$stripe = new Stripe();
$stripe->pay(200);


