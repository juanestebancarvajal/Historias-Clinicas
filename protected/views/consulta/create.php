<?php
/* @var $this ConsultaController */
/* @var $model Consulta */
if (!isset(Yii::app()->session['id_paciente'])){
    echo "Debes ingresar la informacion personal del paciente";
    die();
}
$this->breadcrumbs=array(
	'Consultas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Consulta', 'url'=>array('index')),
	array('label'=>'Manage Consulta', 'url'=>array('admin')),
);
?>

<h1>Create Consulta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>