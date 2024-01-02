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
        <h1 class="display-4">Home task</h1>
        <p class="lead">PopupMaster: Yii2 Modal Form & Admin Controls</p>

        <!-- Include the Modal View -->
        <?= $this->render('formModal', ['model' => $model]) ?>
    </div>
</div>




