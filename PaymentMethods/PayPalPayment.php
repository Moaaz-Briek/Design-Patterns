<?php

class PayPalPayment implements PaymentMethod
{

    public function processPayment($amount)
    {
        echo "Payment is done by Paypal with an amount of: $amount \n";
    }
}