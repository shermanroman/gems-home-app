<?php

use yii\bootstrap5\Modal;
use yii\helpers\Html;
use app\models\FormModelModal;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

// Initialize the model for the modal
$model = new FormModelModal();
?>

<div class="site-index">
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Congratulations!</h1>
        <p class="lead">You have successfully created your Yii-powered application.</p>
        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Get started with Yii</a></p>




        <!-- Include the Modal View -->
        <?= $this->render('FormModal', ['model' => $model]) ?>
    </div>
</div>


