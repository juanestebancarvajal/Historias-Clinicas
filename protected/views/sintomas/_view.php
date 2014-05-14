<?php
/* @var $this SintomasController */
/* @var $data Sintomas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_sintoma')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_sintoma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio_sintoma')); ?>:</b>
	<?php echo CHtml::encode($data->inicio_sintoma); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnostico')); ?>:</b>
	<?php echo CHtml::encode($data->diagnostico); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->id_paciente); ?>
	<br />

	*/ ?>

</div>