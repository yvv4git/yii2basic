<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<table class="table">
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Отчество</th>
        <th>Email</th>
    </tr>
    <tr>
        <td><?= Html::encode($model->first_name) ?></td>
        <td><?= Html::encode($model->second_name) ?></td>
        <td><?= Html::encode($model->middle_name) ?></td>
        <td><?= Html::encode($model->email) ?></td>
    </tr>
</table>