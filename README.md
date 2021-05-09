# Change the default faker lorem to Indonesian words

Using a list of words that I got from this [repo](https://github.com/sastrawi/sastrawi), I changed the default lorem to Indonesian words
## Installation

```bash
composer require --dev mbezhanov/faker-provider-collection
```

that's it, the package already uses [Laravel's package auto discovery](https://laravel.com/docs/8.x/packages#package-discovery)

## Sample Output

```php
$this->faker->sentence(); // Ekor amulet katah abdomen gletser kulikat tugu buruh.
```
