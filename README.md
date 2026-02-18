# Laravel Course - Software Architect
## Tutorial 1
### Notes
- Do you notice anything strange about the way we define the "about" route?

Yes, the form of define de rout about combine logic of controller and view, we can separate them by using a controller to handle the logic and return the view.

- Try to understand the previous code. Add a new product, leaving the name field blank. Then add another new product, leaving the price field blank. Then fill in both fields and observe what happens.

When we try to add a new product with the name field blank, we get an error because the name field is required. Similarly, when we try to add a new product with the price field blank, we also get an error because the price field is required. However, when we fill in both fields and submit the form, the product is successfully added to the list of products.

## Tutorial 2
Completed the tutorial building a complete MVC application with Laravel. I use models, migrations, relationships, factories, seeders and ficticious data to create a complete application. And I also use the Pint code formatter to format the code and make it more readable.

### All activities are in the code, you can check the code for more details.