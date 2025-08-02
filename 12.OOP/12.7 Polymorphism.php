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

$gateways = [new PayPal(), new Stripe()];
foreach( $gateways as $gateway ) {
    $gateway->pay(500);
}


