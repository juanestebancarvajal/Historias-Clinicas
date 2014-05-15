<?php
/* @var $this SintomasController */
/* @var $data Sintomas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sintomas')); ?>:</b>
	<?php echo CHtml::encode($data->sintomas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_sintomas')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_sintomas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evolucion')); ?>:</b>
	<?php echo CHtml::encode($data->evolucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examenes')); ?>:</b>
	<?php echo CHtml::encode($data->examenes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resultados')); ?>:</b>
	<?php echo CHtml::encode($data->resultados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->id_paciente); ?>
	<br />


</div>