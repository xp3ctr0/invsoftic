<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Rolintecoma */

$this->title = 'Update Rolintecoma: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Rolintecomas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->RIComId, 'url' => ['view', 'id' => $model->RIComId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rolintecoma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
