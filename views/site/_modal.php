<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap5\Modal;

/* @var $model app\models\FormModelModal */

// Define the delay in milliseconds
$modalDelay = 5000;

// Begin the modal
Modal::begin([
    'id' => 'myModal',
    'title' => '<h2>Your Modal Title</h2>',
    'toggleButton' => ['label' => 'Open Modal', 'class' => 'btn btn-primary'],
]);

$form = ActiveForm::begin([
    'id' => 'modal-form',
    'options' => ['class' => 'form-horizontal'],
]);

echo $form->field($model, 'name');
echo $form->field($model, 'email');
echo $form->field($model, 'id');

echo Html::submitButton('Submit', ['class' => 'btn btn-primary']);

ActiveForm::end();

// End the modal
Modal::end();
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
                keyboard: false
            });
            myModal.show();
        }, <?= $modalDelay ?>);
    });

</script>
