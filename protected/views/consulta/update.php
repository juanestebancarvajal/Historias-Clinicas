<?php
/* @var $this ConsultaController */
/* @var $model Consulta */

$this->breadcrumbs=array(
	'Consultas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);


?>

<h1>Editar Consulta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>