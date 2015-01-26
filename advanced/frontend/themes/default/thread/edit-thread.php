<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Thread $model
 */

$this->title = '更新帖子: ' . $model->title;
$this->buildBreadcrumbs($currentBoard['id']);
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thread-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    	'currentBoard'=>$currentBoard,
    ]) ?>

</div>
