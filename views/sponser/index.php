<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SponserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sponsers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sponsers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sponsers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'company',
            'phone_no',
            'email:email',
            //'address',
            //'city',
            //'postal_code',
            //'province',
            //'country',
            //'notes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
