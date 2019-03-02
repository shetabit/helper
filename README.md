# Helper
##### This Package helps developers to work with custom helpers.


##### Installation
Require this package with composer:
```
composer require shetabit/helper
```
##### List of helpers

* [removeComma](#remove-comma)
* [toGregorian](#to-gregorian)

## removeComma
Remove comma's from value.
```php
  Helper::removeComma('5000,000'); //Output: '5000000'
  //Or
  remove_comma('5000,000') //Output: '5000000'
```
 
 ## toGregorian
Convert jalali date to gregorian date.
```php
  Helper::toGregorian('1397/12/11'); //Output: '2018/03/02'
  //Or
  to_gregorian('1397/12/11') //Output: '2018/03/02'
```
