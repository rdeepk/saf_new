<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sponsers */

$this->title = 'Create Sponsers';
$this->params['breadcrumbs'][] = ['label' => 'Sponsers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sponsers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
