<?php
/* @var $this SintomasController */
/* @var $model Sintomas */

$this->breadcrumbs=array(
	'Sintomases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);


?>

<h1>Edicion Sintomas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>