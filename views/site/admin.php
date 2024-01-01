<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

/** @var yii\web\View $this */
/** @var app\models\ModalSettings $model */

$this->title = 'Admin Settings';

?>

<div class="site-index">
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4"><?= Html::encode($this->title) ?></h1>
    </div>
</div>

<div class="admin-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isModalEnabledMaster')->checkbox() ?>
    <?= $form->field($model, 'isModalEnabledOnMobileIOS')->checkbox() ?>
    <?= $form->field($model, 'isModalEnabledOnMobileAndroid')->checkbox() ?>
    <?= $form->field($model, 'isModalEnabledOnDesktop')->checkbox() ?>
    <?= $form->field($model, 'delay')->textInput(['type' => 'number']) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
