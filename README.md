# Helper
### This Package helps developers to work with custom helpers.
[![Maintainability](https://api.codeclimate.com/v1/badges/148840150a83dc5afe85/maintainability)](https://codeclimate.com/github/shetabit/helper/maintainability)
[![StyleCI](https://github.styleci.io/repos/172775601/shield?branch=master)](https://github.styleci.io/repos/172775601)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/shetabit/helper/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/shetabit/helper/?branch=master)

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

* [Random Password](#random-password)
* [Persian Slug](#persian-slug)
* [Persian To English Numbers](#persian-to-english-numbers)
* [Remove Comma](#remove-comma)
* [Jalali To Gregorian](#jalali-to-gregorian)
* [Mb Json Encode](#mb-json-encode)

### Random Password
Generate random password.
$availableSets parameter: 'l' => lowercase alphabets, 'u' => uppercase, 'd' => digits, 's' => symbols
```php
  ...randomPassword(int $length = 9, string $availableSets = 'luds');
  
  Helper::randomPassword(); //Output: '9nZnE%3wB'
  //Or
  random_password(); //Output: '9nZnE%3wB'
```

### Persian Slug
Generate persian slug.
```php
  ...persianSlug(string $string, string $separator = '-')
  
  Helper::persianSlug('ایران سرای من'); //Output: 'ایران-سرای-من'
  //Or
  persian_slug('ایران سرای من'); //Output: 'ایران-سرای-من'
```

### Persian To English Numbers
Convert all Persian(Farsi) numbers to English.
```php
  ...faToEnNums(string $number)
  
  Helper::faToEnNums('۵۶89٤٦'); //Output: '568946'
  //Or
  fa_to_en_nums('۵۶89٤٦'); //Output: '568946'
```

### Remove Comma
Remove comma's from value.
```php
  ...removeComma(string $value)
  
  Helper::removeComma('5000,000'); //Output: '5000000'
  //Or
  remove_comma('5000,000') //Output: '5000000'
```
 
 ### Jalali To Gregorian
Convert jalali date to gregorian date.
```php
  ...toGregorian(string $jDate)
  
  Helper::toGregorian('1397/12/11'); //Output: '2018/3/2'
  //Or
  to_gregorian('1397/12/11') //Output: '2018/3/2'
```

### Mb Json Encode
json_encode() for multibyte characters.
```php
  ...mbJsonEncode(array $input)
  
  Helper::mbJsonEncode(['name' => 'علی', 'family' => 'حمزه ای']); //Output: '{"name":"علی","family":"حمزه ای"}'
  //Or
  mb_json_encode(['name' => 'علی', 'family' => 'حمزه ای']) //Output: '{"name":"علی","family":"حمزه ای"}'
```