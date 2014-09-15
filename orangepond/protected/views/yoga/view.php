<?php
/* @var $this YogaController */
/* @var $model Yoga */

$this->breadcrumbs=array(
	'Yogas'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Yoga', 'url'=>array('index')),
	array('label'=>'Create Yoga', 'url'=>array('create')),
	array('label'=>'Update Yoga', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Yoga', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Yoga', 'url'=>array('admin')),
);
?>

<h1>View Yoga #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>
