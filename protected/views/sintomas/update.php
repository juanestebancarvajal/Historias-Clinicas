<?php
/* @var $this SintomasController */
/* @var $model Sintomas */

$this->breadcrumbs=array(
	'Sintomases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sintomas', 'url'=>array('index')),
	array('label'=>'Create Sintomas', 'url'=>array('create')),
	array('label'=>'View Sintomas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sintomas', 'url'=>array('admin')),
);
?>

<h1>Update Sintomas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>