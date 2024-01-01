<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap5\Modal;

/* @var $model app\models\FormModelModal */

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
    document.getElementById('modal-form').onsubmit = function(event) {
        console.log('qweqweqweqwe')
        event.preventDefault();
        var formData = new FormData(this);
        fetch('?r=site/index', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error('Error:', error));
    };
</script>
