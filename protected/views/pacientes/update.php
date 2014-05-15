<?php
/* @var $this PacientesController */
/* @var $model Pacientes */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1>Editar Informacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>