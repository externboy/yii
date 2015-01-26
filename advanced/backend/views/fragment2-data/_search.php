<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\search\Fragment2DataSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="fragment2-data-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fragment_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'title_format') ?>

    <?= $form->field($model, 'title_pic') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'sub_title') ?>

    <?php // echo $form->field($model, 'summary') ?>

    <?php // echo $form->field($model, 'publish_time') ?>

    <?php // echo $form->field($model, 'sort_num') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
