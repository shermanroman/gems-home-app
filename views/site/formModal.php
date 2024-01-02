<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap5\Modal;
use app\models\ModalSettings;

/* @var $model app\models\FormModelModal */

$enableModal = false;

// Fetch the modal settings from the database
$modalSettings = ModalSettings::findOne(1); // Assuming you have a row with ID 1

// Check if the settings are enabled
$modalDelay = $modalSettings->delay;
$isModalEnabledMaster = $modalSettings->isModalEnabledMaster;
$isModalEnabledOnMobileIOS = $modalSettings->isModalEnabledOnMobileIOS;
$isModalEnabledOnMobileAndroid = $modalSettings->isModalEnabledOnMobileAndroid;
$isModalEnabledOnDesktop = $modalSettings->isModalEnabledOnDesktop;
$hideButton = $modalSettings->hideButton;


// Detect user agent to set modal activation conditions
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if ($isModalEnabledMaster) {
    if (str_contains($userAgent, 'iPhone') || str_contains($userAgent, 'iPad') && $isModalEnabledOnMobileIOS) {
        $enableModal = true;
    } elseif (str_contains($userAgent, 'Android') && $isModalEnabledOnMobileAndroid) {
        $enableModal = true;
    } elseif ($isModalEnabledOnDesktop) {
        $enableModal = true;
    }
}

if ($enableModal) {
// Begin the modal

    $toggleButtonAttributes = [
        'label' => 'Open Modal',
        'class' => 'btn btn-primary',
    ];

    if ($hideButton) {
        $toggleButtonAttributes['style'] = 'display:none;';
    }

    Modal::begin([
        'id' => 'myModal',
        'title' => '<h2>Submit your data</h2>',
        'toggleButton' => $toggleButtonAttributes,
    ]);

    $form = ActiveForm::begin([
        'id' => 'modal-form',
        'options' => ['class' => 'form-horizontal'],
    ]);

    // Add a div to display the error summary, initially hidden
    echo '<div id="error-message" class="alert alert-danger" style="display:none"></div>';

    echo $form->field($model, 'name');
    echo $form->field($model, 'email');
    echo $form->field($model, 'id_form');

    echo Html::submitButton('Submit', ['class' => 'btn btn-primary']);

    ActiveForm::end();

// End the modal
    Modal::end();
}
?>

<?php if ($enableModal): ?> <!-- Check if $enableModal is true -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
                    keyboard: false
                });
                myModal.show();
            }, <?= $modalDelay ?>);
        });

        // Assuming you have a form with the id 'modal-form'
        $('#modal-form').submit(function(event) {
            event.preventDefault();
            event.stopImmediatePropagation();

            var formData = {
                name: $('#formmodelmodal-name').val(),
                email: $('#formmodelmodal-email').val(),
                id_form: $('#formmodelmodal-id_form').val(),
            };

            formData.submissionDate = new Date().toLocaleString();

            console.log('Form Data:');
            console.log(formData);

            $.ajax({
                url: '/form/submit-form', // Use the custom route you defined
                method: 'POST',
                data: formData,
                success: function(response) {
                    response = JSON.parse(response);
                    console.log('Response from PHP controller:');
                    console.log(response);

                    if (response.status === 'success') {
                        var $alert = $("#w3-success-0");

                        // Use jQuery to change its CSS "display" property to "block" to make it visible
                        $alert.css("display", "block");
                        $('#error-message').hide()
                        $('#myModal').modal('hide');
                    } else {
                        $('#error-message').html(response.message);
                        $('#error-message').show();
                    }

                },
                error: function(error) {
                    console.error('AJAX Error:', error);

                    // Handle error response
                    // For example, you can display an error message to the user
                    $('#error-message').html('An error occurred. Please try again.');
                }
            });

        });
    </script>
<?php endif; ?>