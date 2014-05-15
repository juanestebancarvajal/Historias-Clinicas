<?php
/* @var $this SintomasController */
/* @var $model Sintomas */

$this->breadcrumbs=array(
	'Sintomases'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List Sintomas', 'url'=>array('index')),
	array('label'=>'Manage Sintomas', 'url'=>array('admin')),
);
 * *
 */
?>

<h1>Create Sintomas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>