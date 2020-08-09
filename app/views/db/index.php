<?php
/**
 * @var $employers Emplyers
 */
?>

<h1> Work with database </h1>

<p>
    <?php foreach($employers as $employer): ?>
        <?= $employer->first_name ?> &nbsp; <?= $employer->last_name ?> &nbsp; <?= $employer->email ?>
    <?php endforeach; ?>
</p>

