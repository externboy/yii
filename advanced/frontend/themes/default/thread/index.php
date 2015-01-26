<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;
use base\YiiForum;
use common\helpers\TTimeHelper;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\search\ThreadSearch $searchModel
 */

$this->title = $currentBoard['name'];
$this->buildBreadcrumbs($currentBoard['id']);
?>
<div class="thread-index">

	<div class="tbox border">
		
		<?php 
			$hd='';
			$style='';
			if(empty($currentBoard['rule']))
			{
				$style = ' style="border-bottom:none;"';
			}
			else 
			{
				$hd = '<div class="bd">'.$currentBoard['rule'].'</div>';
			}
			$hd = '<div class="hd"'.$style.'><h2>'.$currentBoard['name'].'</h2></div>'.$hd;
			echo $hd;
		?>
	</div>
	<?php echo $boards;?>
    <div class="tbox">
	    <div class="floatl">
	    	<?= Html::a('发帖', ['new-thread','boardid'=>$currentBoard['id']], ['class' => 'btn btn-success']) ?>
	    </div>
	    <div class="floatr">
		    <?php echo LinkPager::widget([
		   		'pagination' => $pages,
		   	]);?>
	    </div>
    </div>

    <div class="tbox">
	    <table class="thread-list border">
	    	<tr>
	    		<th>主题</th>
	    		<th width="120px">作者</th>
	    		<th width="120px">回复/查看</th>
	    		<th width="120px">最后发表</th>
	    	</tr>
	    	<?php foreach ($rows as $row ):?>
	    	<tr>
	    		<td><a href="<?php echo YiiForum::getHomeUrl().'?r=thread/view&id='.$row['id']?>"><?php echo $row['title'];?></a></td>
	    		<td class="author"><?php echo $row['user_name'];?><br/><?php TTimeHelper::showTime($row['create_time']);?></td>
	    		<td><?php echo $row['posts'];?>/<?php echo $row['views']?></td>
	    		<td class="last-author"><?php echo $row['last_user_name'];?><br/><?php echo TTimeHelper::showTime($row['last_modify_time'],'Y-m-d H:i');?></td>
	    	</tr>
	    	<?php endforeach;?>
	    </table>
    </div>
    
    <div class="tbox">
	    <div class="floatl">
	    	<?= Html::a('发帖', ['new-thread','boardid'=>$currentBoard['id']], ['class' => 'btn btn-success']) ?>
	    </div>
	    <div class="floatr">
		    <?php echo LinkPager::widget([
		   		'pagination' => $pages,
		   	]);?>
	    </div>
    </div>
   

</div>
