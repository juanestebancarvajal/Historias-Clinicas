<?php
/* @var $this PacientesController */
/* @var $model Pacientes */




?>

<h1>Informacion Almacenada con exito</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellido',
		'lugar_nacimiento',
		'fecha_nacimiento',
		'genero',
		'raza',
		'nacionalidad',
		'estado_civil',
		'profesion',
		'religion',
		'telefono',
		'otros_lugares',
		'escolaridad',
		'seguridad_social',
		'eps',
	),
)); ?>
