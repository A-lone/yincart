<?php
$this->breadcrumbs=array(
	'Kefus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kefu', 'url'=>array('index')),
	array('label'=>'Manage Kefu', 'url'=>array('admin')),
);
?>

<div class="box">
<div class="box-title2">Create Kefu</div>
<div class="box-content">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>