<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Paciente', 'url'=>array('index')),
	array('label'=>'Manage Paciente', 'url'=>array('admin')),
);
?>

<h1>Create Paciente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>