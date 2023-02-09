<?php

return [
    'config' => [
        'title' => 'My Application',
        'version' => '1.0.0',
        'author' => 'John Doe',
        'name' => 'Panel Yii2',
        'id' => 'my-application',
        'description' => 'My Application Description',
        'timezone' => 'Asia/Jakarta',
        'language' => 'en-US',
        'extraCookie' => 'Os3sW', // random string 5 characters
        'url' => 'http://localhost/panel-yii',
    ],

    'theme' => [
        'name' => 'Default Theme',
        'folder' => 'default',
        'logo' => 'icon_logo.png',
        'favicon' => 'favicon.ico',
    ],

    'pusher' => [
        'app_id' => '',
        'cluster' => '',
        'key' => '',
        'secret' => '',
        'channel' => 'my-channel',
        'event' => 'my-event',
        'no-sound' => 'no-sound',
    ],

    'bsVersion' => '4.x', // bootstrap version kartik

    // default yii2 params
    'adminEmail' => 'admin@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
];
