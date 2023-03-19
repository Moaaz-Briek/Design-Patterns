<?php

class StripeAdapter implements PaymentGatewayInterface {
    private $stripe;

    public function __construct(Stripe $stripe) {
        $this->stripe = $stripe;
    }

    public function processPayment($amount) {
        $charge = $this->stripe->charge($amount);
        return $charge['id'];
    }

    public function refundPayment($transactionId) {
        $refund = $this->stripe->refund($transactionId);
        return $refund['id'];
    }
}