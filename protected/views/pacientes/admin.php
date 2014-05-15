<?php
/* @var $this PacientesController */
/* @var $model Pacientes */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pacientes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Historias Clinicas</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pacientes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'apellido',
		'lugar_nacimiento',
		'fecha_nacimiento',
		'genero',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
