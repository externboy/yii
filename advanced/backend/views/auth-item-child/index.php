<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\search\AuthItemChildSearch $searchModel
 */

$this->title = 'Auth Item Children';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-child-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Auth Item Child', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'parent',
            'child',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
