#WordPress Nonces

A composer package, which serves the functionality working with WordPress Nonces in an object orientated environment.

##Usage

add to your functions.php:

```php

// Autoload files using Composer autoload
require __DIR__ . '/vendor/autoload.php';

```

##Examples

###Create a nonce

```php

$WPNonce = new \Pavlushenko\WPNonce();
$nonceCreate = $WPNonce -> wp_create_nonce_oop();

```

For example:

```php
<a href='myplugin.php?do_something=some_action&_wpnonce=<?php echo $nonceCreate; ?>'>Do some action</a>
```

###Verify a nonce

```php

$WPNonce = new \Pavlushenko\WPNonce();
$nonceVerify = $WPNonce -> wp_verify_nonce_oop();

```
###Add a nonce to a URL

```php

$WPNonce = new \Pavlushenko\WPNonce();
$nonceUrl = $WPNonce -> wp_nonce_url_oop();

```
###Add a nonce to a form

```php

$WPNonce = new \Pavlushenko\WPNonce();
$nonceField = $WPNonce -> wp_nonce_field_oop();

```
###Verify a nonce passed in an AJAX request

```php

$WPNonce = new \Pavlushenko\WPNonce();
$checkAjaxRefer = $WPNonce -> check_ajax_referer_oop();

```
###Test either if the current request carries a valid nonce, or if the current request was referred from an administration screen

```php

$WPNonce = new \Pavlushenko\WPNonce();
$checkAdminRefer = $WPNonce -> check_admin_referer_oop();

```
###Display 'Are you sure you want to do this?' message to confirm the action being taken.

```php

$WPNonce = new \Pavlushenko\WPNonce();
$nonceAys = $WPNonce -> wp_nonce_ays_oop();

```
###Retrieve or display the referer hidden form field

```php

$WPNonce = new \Pavlushenko\WPNonce();
$wpReferField = $WPNonce -> wp_referer_field_oop();

```