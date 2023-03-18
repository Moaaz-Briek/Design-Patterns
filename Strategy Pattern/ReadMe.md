<h2>Strategy Pattern (Policy Pattern)</h2>
<p>
    The strategy pattern is a behavioral design pattern that allows you to define a family of algorithms, encapsulate each one as an object, and make them interchangeable at runtime. 
</p>
<p>
    The strategy pattern lets the algorithm vary independently from clients that use it. This pattern is useful when you have multiple algorithms that can be used to solve a problem, and you want to be able to switch between them easily without changing the code that uses them. By encapsulating each algorithm in its own class, you can easily swap out one algorithm for another at runtime without affecting the rest of your code.
</p>
<p>
    Let's say we have a class called "PaymentGateway" that handles payments for our e-commerce website. We want to be able to support multiple payment methods (e.g. credit card, PayPal, Bitcoin), but we don't want to clutter the PaymentGateway class with a bunch of conditional statements for each payment method.
</p>

<p>
To solve this problem, we can use the Strategy Pattern. We'll create an interface called "PaymentMethod" that defines a common set of methods that all payment methods must implement:
```
interface PaymentMethod {
    public function processPayment($amount);
}
```

Next, we'll create concrete classes for each payment method that implement the PaymentMethod interface:

```
class CreditCardPayment implements PaymentMethod {
    public function processPayment($amount) {
        // Process credit card payment
    }
}

class PayPalPayment implements PaymentMethod {
    public function processPayment($amount) {
        // Process PayPal payment
    }
}

class BitcoinPayment implements PaymentMethod {
    public function processPayment($amount) {
        // Process Bitcoin payment
    }
}
```

Finally, we'll modify the PaymentGateway class to accept a PaymentMethod object as a parameter in its constructor:

```
class PaymentGateway {
    private $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment($amount) {
        $this->paymentMethod->processPayment($amount);
    }
}
```

Now, when we want to process a payment using a specific payment method, we can simply create an instance of the corresponding concrete class and pass it to the PaymentGateway constructor:

```
$creditCard = new CreditCardPayment();
$gateway = new PaymentGateway($creditCard);
$gateway->processPayment(100.00);

$paypal = new PayPalPayment();
$gateway = new PaymentGateway($paypal);
$gateway->processPayment(50.00);

$bitcoin = new BitcoinPayment();
$gateway = new PaymentGateway($bitcoin);
$gateway->processPayment(200.00);
```

This way, our code is much more modular and extensible - if we want to add support for another payment method in the future, all we need to do is create another concrete class that implements the PaymentMethod interface and pass it to the PaymentGateway constructor.

</p>
