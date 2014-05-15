<?php
/* @var $this SintomasController */
/* @var $model Sintomas */
if (!isset(Yii::app()->session['id_paciente'])){
    echo "Debes ingresar la informacion personal del paciente";
    die();
}
$this->breadcrumbs=array(
	'Sintomases'=>array('index'),
	'Create',
);

?>

<h1>Sintomas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>