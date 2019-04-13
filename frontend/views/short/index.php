<?php

use yii\bootstrap\Tabs;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ShortsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shorts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="short-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Short', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    </head>
    <body>
    <div class="tab">
    <?php foreach ($model as $key=>$item):?>
          <button class="tablinks" onclick="openTab(event, <?=$item->id?>)" id="<?=($key==0)?'defaultOpen':''?>">
              <?=$item->name?><br/>
              <?=Html::a(Url::base(true).'/'.$item->link,Url::base(true).'/'.$item->link);?>
              <b class="right"><?=$item->view?> TOTAL CLICK</b>
          </button>

    <?php endforeach;?>
    </div><?php foreach ($model as $key=>$item):?>
        <div id="<?=$item->id?>" class="tabcontent">
        <h3><?=$item->name?></h3>
        <p id="p<?=$item->id?>"><?=Html::a(Url::base(true).'/'.$item->link,Url::base(true).'/'.$item->link);?></p>

            <div class="item--action-buttons">
                <button class="button--ACTION" type="button" onclick="copyToClipboard('#p<?=$item->id?>')">COPY</button>
                <button class="button--ACTION"  onclick="location.href='/short/update?id=<?=$item->id?>'" type="button">EDIT</button>
            <button class="button--ACTION"  onclick="location.href='/short/delete?id=<?=$item->id?>'" type="button">DELETE</button>
            <hr>

                <b><?=$item->view?></b> TOTAL CLICK

            </div>
        </div>

<?php endforeach;?>

</div>
