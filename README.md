## CakePhp's Hash

### Installation

To get the lastest version of Theme simply require it in your `composer.json` file.

~~~
"teepluss/hasher": "dev-master"
~~~

You'll then need to run `composer install` to download it and have the autoloader updated.

## Usage

~~~php
// Common Usage:
$users = $this->User->find("all");
$results = Hasher::extract($users, '{n}.User.id');
// $results equals:
// array(1,2,3,4,5,...);
~~~

## For more example:
[CakePhp Hash](http://book.cakephp.org/2.0/en/core-utility-libraries/hash.html)


## Support or Contact

If you have some problem, Contact teepluss@gmail.com


[![Support via PayPal](https://rawgithub.com/chris---/Donation-Badges/master/paypal.jpeg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9GEC8J7FAG6JA)