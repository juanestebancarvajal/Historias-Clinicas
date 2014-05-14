<?php
/* @var $this PacientesController */
/* @var $model Pacientes */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pacientes', 'url'=>array('index')),
	array('label'=>'Create Pacientes', 'url'=>array('create')),
	array('label'=>'Update Pacientes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pacientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pacientes', 'url'=>array('admin')),
);
?>

<h1>View Pacientes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellido',
		'fecha',
		'identificacion',
		'tipo',
	),
)); ?>
