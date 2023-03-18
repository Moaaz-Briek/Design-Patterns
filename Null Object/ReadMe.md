## Null Object Design Pattern
<p>
The Null Object Design Pattern is an object-oriented software design pattern that provides a way to handle null or absent objects. 
    
The pattern suggests creating a class that has the same interface as the expected object but returns default values or performs no operation on method invocations instead of a null reference.
</p>

### Real World Usages in Software Development Process:
1. Data Access Objects (DAOs): Null objects can be used in DAOs to handle absent or null data. When querying data from databases, DAOs can return a null object when there is no corresponding data in the database. This can help to avoid null reference exceptions and make the code more robust.

2. User Interface Design: Null objects can be useful in user interface design to provide default values for user input fields. For example, if a user interface has a text box for entering a phone number, a null object can be used to provide a default value such as "N/A" if the user does not enter a value.

3. Testing: Null objects can be used in testing to simulate missing objects or to test methods that require objects. This can help to avoid using real objects in testing, which can be time-consuming and potentially risky.

4. Dependency Injection: Null objects can also be used in dependency injection frameworks to provide default implementations of dependencies when no other implementation is available. This can help to simplify the configuration of the dependency injection framework and make the code more modular and maintainable.

5. Logging and Error Handling: Null objects can be used in logging and error handling to provide default behaviors or values when certain events occur. This can help to avoid null reference exceptions and other errors that can occur when handling null or absent objects.

### Code Part

```
interface Animal {
    public function makeSound();
}
```
```
class Dog implements Animal {
    public function makeSound() {
        echo "Woof!".PHP_EOL;
    }
}
```
```
class NullAnimal implements Animal {
    public function makeSound() {
        // do nothing
    }
}
```
```
function getAnimal($animalType) {
    if ($animalType === "dog") {
        return new Dog();
    } else {
        return new NullAnimal();
    }
}

$animal = getAnimal("cat");
$animal->makeSound(); // does nothing

$animal = getAnimal("dog");
$animal->makeSound(); // echoes "Woof!"
```

In this example, we define an Animal interface with a method `makeSound()`. We have a Dog class that implements the Animal interface and echoes "Woof!" when the `makeSound()` method is called. We also define a NullAnimal class that implements the Animal interface but does nothing when the `makeSound()` method is called.

We then define a `getAnimal()` function that takes an animalType parameter and returns an Animal object. If the animalType is "dog", it returns a Dog object. If it's anything else, it returns a NullAnimal object.

We can then use the `getAnimal()` function to get either a Dog or a NullAnimal object, depending on the animalType passed. If we call the `makeSound()` method on the Dog object, it echoes "Woof!". If we call the makeSound() method on the NullAnimal object, nothing happens. This is useful in cases where we need to handle null objects but don't want to clutter our code with a lot of null checking.

### In this Example, we can use both Null Object design pattern and Simple Factory pattern.
