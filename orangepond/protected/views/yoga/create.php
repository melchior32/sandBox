<?php
/* @var $this YogaController */
/* @var $model Yoga */

$this->breadcrumbs=array(
	'Yogas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Yoga', 'url'=>array('index')),
	array('label'=>'Manage Yoga', 'url'=>array('admin')),
);
?>

<h1>Create Yoga</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>