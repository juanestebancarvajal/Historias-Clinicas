<?php
/* @var $this PacientesController */
/* @var $model Pacientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pacientes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con<span class="required">*</span> son requeridos</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_nacimiento'); ?>
		<?php echo $form->textField($model,'lugar_nacimiento',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'lugar_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'fecha_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->textField($model,'genero',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'raza'); ?>
		<?php echo $form->textField($model,'raza',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'raza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacionalidad'); ?>
		<?php echo $form->textField($model,'nacionalidad',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_civil'); ?>
		<?php echo $form->textField($model,'estado_civil',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesion'); ?>
		<?php echo $form->textField($model,'profesion',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'profesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otros_lugares'); ?>
		<?php echo $form->textField($model,'otros_lugares',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'otros_lugares'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escolaridad'); ?>
		<?php echo $form->textField($model,'escolaridad',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'escolaridad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seguridad_social'); ?>
		<?php echo $form->textField($model,'seguridad_social',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'seguridad_social'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eps'); ?>
		<?php echo $form->textField($model,'eps',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'eps'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->