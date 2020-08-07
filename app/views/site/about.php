<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Какая то информация о странице.
    </p>
    <div>
        <?php
            var_dump($_SERVER);
        ?>
    </div>

    <code><?= __FILE__ ?></code>
</div>
