<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AplicacionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aplicaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aplicaciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Aplicaciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'AppId',
            'AppNomb',
            'AppDesc',
            'AppVers',
            'TiposId_fk1',
            //'AppNumeLice',
            //'TiposId_fk2',
            //'TiposId_fk3',
            //'EDDesId_fk',
            //'TiposId_fk4',
            //'TiposId_fk5',
            //'AppInteApp',
            //'ESopId_fk',
            //'TiposId_fk6',
            //'TiposId_fk7',
            //'AppVersBD',
            //'AppBaseDato',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
