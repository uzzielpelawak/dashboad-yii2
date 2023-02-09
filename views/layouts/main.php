<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;

\hail812\adminlte3\assets\FontAwesomeAsset::register($this);
\hail812\adminlte3\assets\AdminLteAsset::register($this);
$this->registerCssFile('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback');

$assetDir = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= $this->title ? Html::encode($this->title) : Yii::$app->params['config']['title'] ?> - <?= Yii::$app->name; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= Yii::$app->params['config']['url'] ?? 'http://localhost/panel-yii'; ?>/themes/<?= Yii::$app->params['theme']['folder'] ?? 'default'; ?>/favicon/<?= Yii::$app->params['theme']['favicon'] ?? 'favicon.ico' ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <meta name="description" content="<?= Yii::$app->params['config']['description'] ?>">
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        // let audio = new Audio('<?php # echo Yii::$app->params['config']['url'] ?? 'http://localhost/panel-yii'; ?>/themes/<?php echo Yii::$app->params['theme']['folder'] ?? 'default'; ?>/sound/sound.mp3');
        // var pusher = new Pusher('<?php # echo Yii::$app->params['pusher']['key'] ?>', {
        // cluster: '<?php # echo Yii::$app->params['pusher']['cluster'] ?>'
        // });
        // var channel = pusher.subscribe('<?= Yii::$app->params['pusher']['channel'] ?>');
        // channel.bind('<?php # echo Yii::$app->params['pusher']['event']  ?>', function(data) {
        //     audio.play();
        //     setTimeout(reloadDraw, 1000);
        // });
        // function reloadDraw() {
        //     checkNotif();
        //     var containerNewDraw = document.getElementById("draw-container");
        //     if(containerNewDepo){
        //         $.pjax.reload({container: '#draw-container', async:false});
        //     }
        // }
        // function checkNotif() {
        //     $.ajax({
        //         url: '<?php # echo Url::to(['/api/check-notif']) ?>',
        //         type: 'POST',
        //         dataType: 'json',
        //         data : {
        //             _csrf : '<?php # echo Yii::$app->request->getCsrfToken() ?>'
        //         },
        //         success: function (data) {
        //             if(data.data['newdraw'] > 0) {
        //                 document.getElementById("notifBar").innerHTML = '<span class="badge badge-success navbar-badge">' + data.data['newdraw'] + '</span>';
        //             } else {
        //                 document.getElementById("notifBar").innerHTML = '';
        //             }
        //         }
        //     });
        // }
    </script>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini">
<?php $this->beginBody() ?>
<style>
.main-header {
    z-index: 1;
}
</style>
<div class="wrapper">

    <!-- Navbar -->
    <?= $this->render('navbar', ['assetDir' => $assetDir]) ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?= $this->render('sidebar', ['assetDir' => $assetDir]) ?>

    <!-- Content Wrapper. Contains page content -->
    <?= $this->render('content', ['content' => $content, 'assetDir' => $assetDir]) ?>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <?= $this->render('control-sidebar') ?>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?= $this->render('footer') ?>
</div>
<script>
    if(localStorage.getItem("navbar")=="closed") {
        var bodyClass = document.getElementsByTagName("BODY")[0];
        bodyClass.classList.add("sidebar-collapse","sidebar-closed");
    }
    function menuPush()
    {
        var bodyClass = document.getElementsByTagName("BODY")[0];
        if (localStorage.getItem("navbar")=="closed") {
            localStorage.setItem("navbar", "open");
        } else {
            localStorage.setItem("navbar", "closed");
        }
    }
</script>
<?php foreach (Yii::$app->session->getAllFlashes() as $message):; ?>
    <?php
    echo \kartik\widgets\Growl::widget([
        'type' => (!empty($message['type'])) ? $message['type'] : 'danger',
        'title' => (!empty($message['title'])) ? Html::encode($message['title']) : 'Title Not Set!',
        'icon' => (!empty($message['icon'])) ? $message['icon'] : 'fa fa-info',
        'body' => (!empty($message['message'])) ? Html::encode($message['message']) : 'Message Not Set!',
        'showSeparator' => true,
        'delay' => 1, //This delay is how long before the message shows
        'pluginOptions' => [
            'delay' => (!empty($message['duration'])) ? $message['duration'] : 3000, //This delay is how long the message shows for
            'showProgressbar' =>true,
            'placement' => [
                'from' => (!empty($message['positonY'])) ? $message['positonY'] : 'top',
                'align' => (!empty($message['positonX'])) ? $message['positonX'] : 'right',
            ]
        ]
    ]);
    ?>
<?php endforeach; ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
