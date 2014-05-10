<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Paciente', 'url'=>array('index')),
	array('label'=>'Create Paciente', 'url'=>array('create')),
	array('label'=>'Update Paciente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Paciente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paciente', 'url'=>array('admin')),
);
?>

<h1>View Paciente #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha_ingreso',
		'nombre',
		'apellido',
		'lugar_nacimiento',
		'edad',
		'genero',
		'raza',
		'nacionalidad',
	),
)); ?>
