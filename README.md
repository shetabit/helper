# Helper
### This Package helps developers to work with custom helpers.


### Installation
Require this package with composer:
```
composer require shetabit/helper
```
Laravel >=5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php:
```php
  Shetabit\Helper\HelperServiceProvider::class,
```
If you want to use the facade, add this to your facades in app.php:
```php
  'Helper' => Shetabit\Helper\Facades::class,
```

### List of helpers

* [Remove Comma](#remove-comma)
* [Jalali To Gregorian](#jalali-to-gregorian)

### Remove Comma
Remove comma's from value.
```php
  Helper::removeComma('5000,000'); //Output: '5000000'
  //Or
  remove_comma('5000,000') //Output: '5000000'
```
 
 ### Jalali To Gregorian
Convert jalali date to gregorian date.
```php
  Helper::toGregorian('1397/12/11'); //Output: '2018/03/02'
  //Or
  to_gregorian('1397/12/11') //Output: '2018/03/02'
```
