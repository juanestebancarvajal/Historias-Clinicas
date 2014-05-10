<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paciente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_ingreso'); ?>
		<?php echo $form->textField($model,'fecha_ingreso'); ?>
		<?php echo $form->error($model,'fecha_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_nacimiento'); ?>
		<?php echo $form->textField($model,'lugar_nacimiento',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lugar_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edad'); ?>
		<?php echo $form->textField($model,'edad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'edad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->textField($model,'genero',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'raza'); ?>
		<?php echo $form->textField($model,'raza',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'raza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacionalidad'); ?>
		<?php echo $form->textField($model,'nacionalidad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nacionalidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->