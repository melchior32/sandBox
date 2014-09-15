<?php
/* @var $this YogaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Yogas',
);

$this->menu=array(
	array('label'=>'Create Yoga', 'url'=>array('create')),
	array('label'=>'Manage Yoga', 'url'=>array('admin')),
);
?>

<h1>Yogas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
