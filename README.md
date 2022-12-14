# Oyova PHP CS Fixer
This package is a wrapper for [PHP CS Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer). PHP CS Fixer is used to automatically fix PHP coding standards issues and this package establishes the preferred Oyova rules and simplifies setup.

## Installation
Install the package via Composer:
```
composer require --dev oyova/php-cs-fixer
```

## Setup
In the project root, create a file named `.php-cs-fixer.php` with the following code:
```php
<?php

return (new Oyova\PhpCsFixer\Setup(__FILE__))
    // ->in(string|array)
    // ->exclude(string|array)
    // ->notName(string|array)
    ->getConfig();
```
For WordPress, use `Oyova\PhpCsFixer\WordPressSetup` instead of `Oyova\PhpCsFixer\Setup`.

## Usage
From the project root, run the command `vendor/bin/php-cs-fixer fix` to fix all configured files or `vendor/bin/php-cs-fixer fix path/to/file.php` to fix a specific file or directory. [Create a bash alias](https://linuxize.com/post/how-to-create-bash-aliases) for the command for ease of use (e.g. `alias phpfix='vendor/bin/php-cs-fixer fix'`).
