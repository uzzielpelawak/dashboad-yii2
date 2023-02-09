<?php

use uzzielpelawak\modules\UserManagement\models\User;

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Yii::$app->params['config']['url'] ?? 'http://localhost/panel-yii'; ?>" class="brand-link">
        <img src="<?= Yii::$app->params['config']['url'] ?? 'http://localhost/panel-yii'; ?>/themes/<?= Yii::$app->params['theme']['folder'] ?? 'default'; ?>/img/<?= Yii::$app->params['theme']['logo'] ?? 'icon_logo.png' ?>" alt="panel logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light"><?= Yii::$app->params['config']['name'] ?? 'Panel Yii2' ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <span class="d-block text-white">
                    <?php if(Yii::$app->user->isGuest): ?>
                        Guest
                    <?php else: ?>
                    <?php echo Yii::$app->user->identity->username ?> 
                    <?php endif; ?>
                </span>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-fw fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            $allmenu = [];

            if(User::hasRole('Admin')) {
                $allmenu[] = ['label' => 'User', 'header' => true];
                $allmenu[] = ['label' => 'User','icon' => 'user','url' => ['/user-management/user']];
                $allmenu[] = ['label' => 'Roles','icon' => 'user-tag','url' => ['/user-management/role']];
            }

            if(User::hasRole('superadmin')) {
                $allmenu[] = ['label' => 'Group Roles','icon' => 'users', 'url' => ['/user-management/auth-item-group']];
                $allmenu[] = ['label' => 'Permission','icon' => 'keyboard','url' => ['/user-management/permission']];
            }

            $allmenu[] = ['label' => 'Change Password','icon' => 'key','url' => ['/user-management/auth/change-own-password']];
            $allmenu[] = ['label' => 'Logout','icon' => 'sign-out-alt','url' => ['/user-management/auth/logout']];

            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => $allmenu
            ]);
            ?>
        </nav>
    </div>
</aside>