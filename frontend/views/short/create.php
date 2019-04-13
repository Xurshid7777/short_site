<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Short */

$this->title = 'Create Short';
$this->params['breadcrumbs'][] = ['label' => 'Shorts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="short-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
