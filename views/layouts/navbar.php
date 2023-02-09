<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" onclick="menuPush()" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link" role="button">NOTIFICATION
                <span id="notifBar">
                    <span class="badge badge-success navbar-badge"></span>
                </span>
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->