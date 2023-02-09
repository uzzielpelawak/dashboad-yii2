<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="50px">
    </a>
    <h1 align="center">Dashboard YII2 with Admin LTE 3 & Webvimark RBAC</h1>
    <br>
</p>

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 8.0.


INSTALLATION
------------

Download via ZIP / Clone via Git

Run Command for download all Vendor

~~~
composer update
~~~

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

Run migrations Database for RBAC

~~~
./yii migrate --migrationPath=vendor/uzzielpelawak/module-user-management/migrations/
~~~

Edit config add `config/params.php` 


### Reference :

RBAC : <a href="https://github.com/webvimark/user-management" target="_blank">Original from Webvimark</a>

Pusher : <a href="https://pusher.com/" target="_blank">Pusher for Real Notification</a>

Nofitication + Sound

Uncomment line at `views/layout/main.php` :
```
    // let audio = new Audio('<?php # echo Url::base() ?>/themes/sound/sound.mp3');
    // var pusher = new Pusher('<?php # echo Yii::$app->params['pusher']['key'] ?>', {
    // cluster: '<?php # echo Yii::$app->params['pusher']['cluster'] ?>'

```
Kartik Extention : <a href="https://demos.krajee.com/" target="_blank">Kartik / Krajee</a>


### Authors

- [@uzziepelawak](https://www.github.com/uzziepelawak)
