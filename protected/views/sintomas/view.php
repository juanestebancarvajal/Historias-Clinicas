<?php
/* @var $this SintomasController */
/* @var $model Sintomas */

$this->breadcrumbs=array(
	'Sintomases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sintomas', 'url'=>array('index')),
	array('label'=>'Create Sintomas', 'url'=>array('create')),
	array('label'=>'Update Sintomas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sintomas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sintomas', 'url'=>array('admin')),
);
?>

<h1>View Sintomas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sintomas',
		'fecha_sintomas',
		'evolucion',
		'examenes',
		'resultados',
		'id_paciente',
	),
)); ?>
