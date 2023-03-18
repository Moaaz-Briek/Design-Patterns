<?php

use PaymentMethods\BitcoinPayment;
use PaymentMethods\CreditCardPayment;
use PaymentMethods\PayPalPayment;

include "autoload.php";
$creditCard = new CreditCardPayment();
$gateway = new PaymentGateway($creditCard);
$gateway->processPayment(1000);

$paypal = new PayPalPayment();
$gateway = new PaymentGateway($paypal);
$gateway->processPayment(500);

$bitcoin = new BitcoinPayment();
$gateway = new PaymentGateway($bitcoin);
$gateway->processPayment(100);