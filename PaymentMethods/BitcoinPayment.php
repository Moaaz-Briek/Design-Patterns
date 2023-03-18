<?php

class BitcoinPayment implements PaymentMethod
{

    public function processPayment($amount)
    {
        echo "Payment is done by Bitcoin with an amount of: $amount \n";
    }
}