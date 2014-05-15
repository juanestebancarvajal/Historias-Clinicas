<?php
/* @var $this PacientesController */
/* @var $data Pacientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($data->genero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('raza')); ?>:</b>
	<?php echo CHtml::encode($data->raza); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->nacionalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->estado_civil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesion')); ?>:</b>
	<?php echo CHtml::encode($data->profesion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('religion')); ?>:</b>
	<?php echo CHtml::encode($data->religion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros_lugares')); ?>:</b>
	<?php echo CHtml::encode($data->otros_lugares); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escolaridad')); ?>:</b>
	<?php echo CHtml::encode($data->escolaridad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seguridad_social')); ?>:</b>
	<?php echo CHtml::encode($data->seguridad_social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eps')); ?>:</b>
	<?php echo CHtml::encode($data->eps); ?>
	<br />

	*/ ?>

</div>