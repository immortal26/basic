<?php
/**
 * Created by PhpStorm.
 * User: abhishek@SYON.COM
 * Date: 10/7/17
 * Time: 3:21 PM
 */

use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>