<?php
/* @var $this AgendaController */
/* @var $model Agenda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agenda-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'lugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora'); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_cierre'); ?>
		<?php echo $form->textField($model,'fecha_cierre'); ?>
		<?php echo $form->error($model,'fecha_cierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'temario'); ?>
		<?php echo $form->textField($model,'temario',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'temario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_acta'); ?>
		<?php echo $form->textField($model,'id_acta'); ?>
		<?php echo $form->error($model,'id_acta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
