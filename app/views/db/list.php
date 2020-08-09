<?php
/**
 * @var $dataProvider ActiveDataProvider
 */
use yii\widgets\ListView;
?>

<h1>Example with "List view"</h1>
<div>
    <?php
    echo ListView::widget([
        'dataProvider' => $dataProvider,
        /* 'itemView' => '_list', */
        'options' => [
            'tag' => 'div',
            'class' => 'list-wrapper',
            'id' => 'list-wrapper',
        ],
        'layout' => "{pager}\n{items}\n{summary}",
        'itemView' => '_list',
    ]);
    ?>
</div>