<?php
/* @var $this ConsultaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consultas',
);

$this->menu=array(
	array('label'=>'Create Consulta', 'url'=>array('create')),
	array('label'=>'Manage Consulta', 'url'=>array('admin')),
);
?>

<h1>Consultas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
