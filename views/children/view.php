<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \models\Children */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Children', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="children-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code',
            'old_code',
            'name',
            'gender',
            'race',
            'grade',
            'gpa',
            'father_id',
            'mother_id',
            'city',
            'district',
            'phone_no',
            'approval_date',
            'sponsership_start_date',
            'yearly_school_fee',
            'water_filter_year',
            'wash_year',
            'field_officer_id',
            'year_graduated',
            'notes:ntext',
            'medical_aid',
            'sponsered',
            'sponser_id',
            'school_id',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
