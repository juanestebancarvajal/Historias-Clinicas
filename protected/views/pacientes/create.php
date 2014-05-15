<?php
/* @var $this PacientesController */
/* @var $model Pacientes */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pacientes', 'url'=>array('index')),
	array('label'=>'Manage Pacientes', 'url'=>array('admin')),
);
?>

<h1>Create Pacientes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>