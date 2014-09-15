<?php
/* @var $this YogaController */
/* @var $model Yoga */

$this->breadcrumbs=array(
	'Yogas'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Yoga', 'url'=>array('index')),
	array('label'=>'Create Yoga', 'url'=>array('create')),
	array('label'=>'View Yoga', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Yoga', 'url'=>array('admin')),
);
?>

<h1>Update Yoga <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>