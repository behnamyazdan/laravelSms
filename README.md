laravelSms
==========

package for send sms in laravel (published for [parssms24.ir](http://parssms24.ir)) this package only work for iranian mobile operator

installation
------------
For install this package Edit your project's ```composer.json``` file to require livana/sms

```php
"require": {
    "livana/sms": "dev-master"
},
```

Now, update Composer:

```
composer update
```

Once composer is finished, you need to add the service provider. Open app/config/app.php, and add a new item to the providers array.

```
'Livana\Sms\SmsServiceProvider',
```

Next, add a Facade for more convenient usage. In app/config/app.php add the following line to the aliases array:

```
'Sms' => 'Livana\Sms\Facades\Sms',
```

Publish config files:

```
php artisan config:publish livana/sms
```
