<?php
/* @var $this SintomasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sintomases',
);

$this->menu=array(
	array('label'=>'Create Sintomas', 'url'=>array('create')),
	array('label'=>'Manage Sintomas', 'url'=>array('admin')),
);
?>

<h1>Sintomases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
