<?php

use yii\helpers\Html;
use common\includes\CommonUtility;

/**
 * @var yii\web\View $this
 * @var common\models\Fragment2Data $model
 */

$this->title = '编辑内容';
$this->addBreadcrumb(CommonUtility::getFragmentType(2).'管理',['fragment/index','type'=>2]);
$this->addBreadcrumb($currentFragment->name,['index','fraid'=>$currentFragment->id]);
$this->addBreadcrumb($this->title);
?>
<div class="fragment2-data-update">

    <?= $this->render('_form', [
        'model' => $model,
    		'currentFragment'=>$currentFragment,
    ]) ?>

</div>
