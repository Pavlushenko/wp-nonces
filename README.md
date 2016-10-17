#WordPress Nonces

A composer package, which serves the functionality working with WordPress Nonces in an object orientated environment.

##Usage

add to your functions.php:

```php

// Autoload files using Composer autoload
require __DIR__ . '/vendor/autoload.php';

```

##Examples

###Create nonce

```php

$WP_Nonce_OOP = new \Pavlushenko\WPNonce();
$nonceCreateOop = $WP_Nonce_OOP -> wp_create_nonce_oop();


```

For example:

```php
<a href='myplugin.php?do_something=some_action&_wpnonce=<?php echo $nonceCreateOop; ?>'>Do some action</a>
```


