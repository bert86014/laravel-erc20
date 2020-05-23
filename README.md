# laravel-baidu-aip

<p align="center">⛵<code>laravel-baidu-aip</code> is a bert86014/baidu-aip laravel package.</p>



Requirements
------------
 - PHP >= 7.0.0
 - Laravel >= 5.0.0
 - Fileinfo PHP Extension

Installation
------------

> This package requires PHP 7+ and Laravel 5

First, install laravel 5.*, and make sure that the database connection settings are correct.

```
composer require bert86014/laravel-baidu-aip
```

Then run these commands to publish assets and config：

```
php artisan vendor:publish --provider="bert86014\BaiduAip\BaiduAipServiceProvider"
```
After run command you can find config file in `config/baiduaip.php`, in this file you can change the install directory,db connection or table names.


Configurations
------------
The file `config/baiduaip.php` contains an array of configurations, you can find the default configurations in there.

You can find appid/appkey/secretKey, from https://console.bce.baidu.com/ai/ 


