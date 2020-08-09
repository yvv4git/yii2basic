<?php
/**
 * @var $model EmployersSaveForm
 */

use yii\helpers\Html;
?>

<h1>Success</h1>

<ul>
    <li><label>Имя</label>: <?= Html::encode($model->first_name) ?></li>
    <li><label>Фамилия</label>: <?= Html::encode($model->second_name) ?></li>
    <li><label>Отчество</label>: <?= Html::encode($model->middle_name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>