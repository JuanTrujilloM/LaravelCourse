# Laravel Course - Software Architect
## Tutorial 1
### Notes
- Do you notice anything strange about the way we define the "about" route?

Yes, the form of define de rout about combine logic of controller and view, we can separate them by using a controller to handle the logic and return the view.

- Try to understand the previous code. Add a new product, leaving the name field blank. Then add another new product, leaving the price field blank. Then fill in both fields and observe what happens.

When we try to add a new product with the name field blank, we get an error because the name field is required. Similarly, when we try to add a new product with the price field blank, we also get an error because the price field is required. However, when we fill in both fields and submit the form, the product is successfully added to the list of products.

## Tutorial 2
Completed the tutorial building a complete MVC application with Laravel. I use models, migrations, relationships, factories, seeders and ficticious data to create a complete application. And I also use the Pint code formatter to format the code and make it more readable.

## Tutorial 3

### Notes

- Can you understand the differences between the two proposals?
In the first proposal (without dependency injection), the controller directly creates an instance of the concrete class that handles image storage. This means the controller is tightly coupled to that specific class, making it harder to change the implementation in the future.

In the second proposal (using dependency injection and an interface), the controller only requests an interface (a contract), and Laravel, through the Service Provider, provides the actual implementation. The controller does not need to know or care about how the image is stored, only that it gets stored.

- What are the advantages and disadvantages of each?

Without Dependency Injection (direct instantiation):

Advantages:

- Simpler and easier to understand for small or quick projects.
- No need to configure extra files or providers.

Disadvantages:

- The controller is tightly coupled to a specific class, making it hard to change the implementation later.
- Difficult to test, as you cannot easily swap the implementation for a mock or fake.
- Less flexible and harder to maintain as the project grows.

With Dependency Injection and Interface:

Advantages:

- The controller depends only on an interface, not a concrete class, making the code more flexible and maintainable.
- Easy to change the implementation (e.g., from local storage to cloud storage) by updating the Service Provider, without touching the controller.
- Facilitates testing, as you can inject mock implementations.
- Follows SOLID principles, especially Dependency Inversion.

Disadvantages:

- Slightly more complex to set up, especially for beginners.
- Requires understanding of interfaces and service providers.

### All activities are in the code, you can check the code for more details.