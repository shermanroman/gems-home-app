<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap5\Modal;

/* @var $model app\models\FormModelModal */

// Define the delay in milliseconds
$modalDelay = 1;

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
<script>
    $(document).ready(function() {
        // Assuming you have a form with the id 'modal-form'
        $('#modal-form').submit(function(event) {
            event.preventDefault(); // Prevent the form from submitting in the default way

            // Get the form data as an object
            var formData = {};
            formData.name = $('#formmodelmodal-name').val(); // Replace 'formmodelmodal-name' with the actual name attribute of the 'name' field
            formData.email = $('#formmodelmodal-email').val(); // Replace 'formmodelmodal-email' with the actual name attribute of the 'email' field
            formData.id = $('#formmodelmodal-id').val(); // Replace 'formmodelmodal-id' with the actual name attribute of the 'id' field

            var submissionDate = new Date().toLocaleString();
            formData.submissionDate = submissionDate;

            // Get the current date and time

            // Log the form data and submission date to the console
            console.log('Form Data:');
            console.log(formData);

            // Here, you can proceed with form submission or any other actions you need
            // For example, you can use AJAX to submit the form data to the server.

            // Replace the following line with your AJAX code or form submission logic.
            // $.ajax({ /* Your AJAX configuration here */ });
        });
    });

</script>
