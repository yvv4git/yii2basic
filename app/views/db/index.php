<?php
/**
 * @var $employers Emplyers
 */
?>

<h1> Work with database </h1>

<p>
    <?php foreach($employers as $employer): ?>
        <?= $employer->first_name ?> &nbsp; <?= $employer->second_name ?> &nbsp; <?= $employer->email ?> <br>
    <?php endforeach; ?>
</p>

