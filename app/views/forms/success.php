<?php
/**
 * @var $model SimpleForm
 */

//use app\models\SimpleForm;
use yii\helpers\Html;
?>

<h1>Success</h1>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>