<?php

namespace PaymentMethods;
interface PaymentMethod
{
    public function processPayment($amount);
}