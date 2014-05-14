
                        <div class="col-lg-3">
                            <div class="btn-group-vertical">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class=""><a href="<?php echo Yii::app()->createUrl('/pacientes/create'); ?>">Informacion General</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/consulta/create'); ?>">Motivo De La Consulta</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/sintomas/create'); ?>">Enfermedad Actual</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/site/enfermedad'); ?>">Interrogatorio por sistema</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/site/pendiente'); ?>">Antecedente</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/site/pendiente'); ?>">Examen Fisico</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/site/pendiente'); ?>">Resumen y opinion</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/site/pendiente'); ?>">Diagnostico</a></li>
                                </ul>
                            </div>
                        </div>
<div class="col-lg-9">
<?php
/* @var $this PacientesController */
/* @var $model Pacientes */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pacientes', 'url'=>array('index')),
	array('label'=>'Manage Pacientes', 'url'=>array('admin')),
);
?>

<h1>Create Pacientes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>