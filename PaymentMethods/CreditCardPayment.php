<?php

class CreditCardPayment implements PaymentMethod
{

    public function processPayment($amount)
    {
        echo "Payment is done by CreditCard with an amount of: $amount \n";
    }
}