<?php

class PayPalAdapter implements PaymentGatewayInterface {
    private $paypal;

    public function __construct(PayPal $paypal) {
        $this->paypal = $paypal;
    }

    public function processPayment($amount) {
        $transactionId = $this->paypal->makePayment($amount);
        return $transactionId;
    }

    public function refundPayment($transactionId) {
        $this->paypal->refundPayment($transactionId);
    }
}