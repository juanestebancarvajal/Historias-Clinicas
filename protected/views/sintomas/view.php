<?php
/* @var $this SintomasController */
/* @var $model Sintomas */

$this->breadcrumbs=array(
	'Sintomases'=>array('index'),
	$model->id,
);

?>

<h1>Informacion Almacenada con exito</h1>

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
