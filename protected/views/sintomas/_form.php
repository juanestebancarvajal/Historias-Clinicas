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

	<p class="note">Campos con <span class="required">*</span>son obligatorios</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sintomas'); ?>
		<?php echo $form->textField($model,'sintomas',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'sintomas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_sintomas'); ?>
		<?php echo $form->textField($model,'fecha_sintomas'); ?>
		<?php echo $form->error($model,'fecha_sintomas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evolucion'); ?>
		<?php echo $form->textField($model,'evolucion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'evolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'examenes'); ?>
		<?php echo $form->textField($model,'examenes',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'examenes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resultados'); ?>
		<?php echo $form->textField($model,'resultados',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'resultados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_paciente'); ?>
		<?php echo $form->textField($model,'id_paciente'); ?>
		<?php echo $form->error($model,'id_paciente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class' => "btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->