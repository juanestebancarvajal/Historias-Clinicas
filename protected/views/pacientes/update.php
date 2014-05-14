<?php
/* @var $this PacientesController */
/* @var $model Pacientes */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pacientes', 'url'=>array('index')),
	array('label'=>'Create Pacientes', 'url'=>array('create')),
	array('label'=>'View Pacientes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pacientes', 'url'=>array('admin')),
);
?>

<h1>Update Pacientes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>