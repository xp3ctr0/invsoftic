<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Cambioalcance */

$this->title = 'Create Cambioalcance';
$this->params['breadcrumbs'][] = ['label' => 'Cambioalcances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cambioalcance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
