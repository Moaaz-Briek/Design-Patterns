<?php
// Process payment using PayPal
$paypal = new PayPal();
$paypalAdapter = new PayPalAdapter($paypal);
$transactionId = $paypalAdapter->processPayment(100);
$paypalAdapter->refundPayment($transactionId);

// Process payment using Stripe
$stripe = new Stripe();
$stripeAdapter = new StripeAdapter($stripe);
$transactionId = $stripeAdapter->processPayment(100);
$stripeAdapter->refundPayment($transactionId);