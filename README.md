# Laravel Rules

This package adds classes that strongly type the [Laravel Validation Rules](https://laravel.com/docs/8.x/validation#available-validation-rules). Currently these classes cannot be used with the default Laravel Validator, though that is our long-term goal.

## Using an Attribute

Any of these validation rules may be used as an attribute on a class. If the validation rule accepts parameters, they will be type hinted on the class construct.

```php
class SomeClass
{
    #[Max(255)]
    public string $firstName;
}
```

## Retrieving the Compiled Rules

To retrieve the rule in Laravel format, call the `getRules()` method on any of the classes.

For example:

```php
$rule = new Max(255);

// Returns: ['max:255']
$array = $rule->getRules();
```