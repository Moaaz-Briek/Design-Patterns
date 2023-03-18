<?php

use PaymentMethods\PaymentMethod;

class PaymentGateway
{
    private PaymentMethod $paymentMethod;

    public function __construct(PaymentMethod  $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment($amount)
    {
        $this->paymentMethod->processPayment($amount);
    }
}