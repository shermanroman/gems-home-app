<?php
namespace app\controllers;

use app\models\Submission;
use Yii;
use yii\web\Controller;
use app\models\FormModelModal;

class FormController extends Controller
{
    public function actionSubmitForm()
    {
        if (Yii::$app->request->isAjax) {
            $formData = Yii::$app->request->post();

            // Create a new instance of the Submission model
            $formModelModal = new FormModelModal();

            // Assign form data to the model's attributes
            $formModelModal->name = $formData['name'];
            $formModelModal->email = $formData['email'];
            $formModelModal->id_form = $formData['id_form'];

            // Save the model, which will insert a new record in the 'submission' table
            if ($formModelModal->save()) {
                // Data saved successfully
                return json_encode(['status' => 'success', 'message' => 'Form submitted successfully']);
            } else {
                // Validation or save failed
                return json_encode(['status' => 'error', 'message' => 'Failed to submit the form']);
            }
        }
    }
}
