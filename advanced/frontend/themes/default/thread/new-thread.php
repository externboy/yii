<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Thread $model
 */

$this->title = '发表帖子';
$this->buildBreadcrumbs($currentBoard['id']);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thread-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    	'currentBoard' => $currentBoard,
    ]) ?>

</div>
