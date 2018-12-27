<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Comandos */

$this->title = 'Create Comandos';
$this->params['breadcrumbs'][] = ['label' => 'Comandos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comandos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
