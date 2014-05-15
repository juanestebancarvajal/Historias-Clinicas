<?php
/* @var $this ConsultaController */
/* @var $model Consulta */

$this->breadcrumbs=array(
	'Consultas'=>array('index'),
	$model->id,
);

?>

<h1>Consulta Paciente</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_paciente',
		'consulta',
	),
)); ?>
