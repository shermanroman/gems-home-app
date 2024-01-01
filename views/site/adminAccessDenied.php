<?php
use yii\helpers\Html;

$this->title = 'Admin Access Denied';
?>

<div class="site-admin-access-denied">
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Access Denied</h1>
        <p class="lead">You do not have admin permissions to access this page.</p>
        <?php
        if (Yii::$app->user->isGuest) {
            echo Html::a('Login', ['/site/login'], ['class' => 'btn btn-lg btn-primary']);
        } else {
            echo Html::a('Go Back', Yii::$app->request->referrer ?: Yii::$app->homeUrl, ['class' => 'btn btn-lg btn-secondary']);
        }
        ?>
    </div>
</div>
