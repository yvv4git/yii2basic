<?php
/**
 * @var $model EmployersSaveForm
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<h1>Form</h1>
<div>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'first_name') ?>
    <?= $form->field($model, 'second_name') ?>
    <?= $form->field($model, 'middle_name') ?>
    <?= $form->field($model, 'email') ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>