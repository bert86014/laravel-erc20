# laravel-erc20

<p align="center">⛵<code>laravel-erc20</code> is a bert86014/erc20 laravel package.</p>



Requirements
------------
 - PHP >= 7.1.0
 - Laravel >= 5.0.0
 - Fileinfo PHP Extension

Installation
------------

> This package requires PHP 7+ and Laravel 5

First, install laravel 5.*, and make sure that the database connection settings are correct.

```
composer require bert86014/laravel-erc20
```

Then run these commands to publish assets and config：

```
php artisan vendor:publish --provider="Bert86014\LaravelErc20\Erc20RpcServiceProvider"
```
After run command you can find config file in `config/ethereum.php`, in this file you can change the install directory,db connection or table names.


Configurations
------------
The file `config/ethereum.php` contains an array of configurations, you can find the default configurations in there.



