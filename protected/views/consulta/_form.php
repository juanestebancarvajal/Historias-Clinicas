<?php
/* @var $this ConsultaController */
/* @var $model Consulta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'consulta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con<span class="required">*</span>son requeridos</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'consulta'); ?>
		<?php //echo //$form->textField($model,'consulta',array('size'=>60,'maxlength'=>300,'class'=>'box')); ?>
                <?php echo $form->textArea($model, 'consulta', array('maxlength' => 300,'cols'=>90)); ?>
            
		<?php echo $form->error($model,'consulta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class' => "btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->