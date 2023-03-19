<?php

interface PaymentGatewayInterface
{
    public function processPayment($amount);
    public function refundPayment($transactionId);
}