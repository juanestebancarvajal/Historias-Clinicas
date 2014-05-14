<?php
/* @var $this SintomasController */
/* @var $model Sintomas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sintomas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_sintoma'); ?>
		<?php echo $form->textArea($model,'fecha_sintoma',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fecha_sintoma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicio_sintoma'); ?>
		<?php echo $form->textArea($model,'inicio_sintoma',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'inicio_sintoma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evolucion'); ?>
		<?php echo $form->textArea($model,'evolucion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'evolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'examenes'); ?>
		<?php echo $form->textArea($model,'examenes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'examenes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resultados'); ?>
		<?php echo $form->textArea($model,'resultados',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resultados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnostico'); ?>
		<?php echo $form->textArea($model,'diagnostico',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'diagnostico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_paciente'); ?>
		<?php echo $form->textField($model,'id_paciente'); ?>
		<?php echo $form->error($model,'id_paciente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->