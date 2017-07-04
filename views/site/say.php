<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Say Hello!';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Demo page. I got a message for you: <?= Html::encode($message) ?>
    </p>

    <code><?= __FILE__ ?></code>
</div>

