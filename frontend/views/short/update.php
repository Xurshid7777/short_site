<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Short */

$this->title = 'Update Short';
$this->params['breadcrumbs'][] = ['label' => 'Shorts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="short-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
