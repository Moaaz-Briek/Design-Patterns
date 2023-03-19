# Adapter Pattern

The Adapter Pattern is a design pattern that allows two incompatible interfaces to work together. In an e-commerce website, the Adapter Pattern can be used to integrate different payment gateways or shipping providers that have different APIs.

For example, let's say you have an e-commerce website that uses PayPal as a payment gateway. However, you want to add Stripe as an alternative payment option. Stripe has a different API than PayPal, so you need to create an adapter class that translates the Stripe API into the format expected by your website.

##  Code Part 

In this example, we define a `PaymentGateway` interface that defines the `processPayment` and `refundPayment` methods.

We then create a `PayPalAdapter` class that takes a `PayPal` object in its constructor and adapts its API to match the `PaymentGateway` interface and implements this interface and processes payments using the PayPal API.

To add support for Stripe, we create a `StripeAdapter` class that takes a `Stripe` object in its constructor and adapts its API to match the `PaymentGateway` interface. The adapter translates the `charge` method from the Stripe API into the `processPayment` method expected by our website.

We can then use both payment gateways interchangeably by calling their respective `processPayment` methods. The adapter pattern allows us to add new payment gateways or shipping providers without having to modify our existing codebase.

