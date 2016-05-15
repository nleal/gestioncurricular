<?php
/* @var $this PensumController */
/* @var $model Pensum */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pensum-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_departamento'); ?>
		<?php echo $form->textField($model,'id_departamento'); ?>
		<?php echo $form->error($model,'id_departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_materia'); ?>
		<?php echo $form->textField($model,'id_materia'); ?>
		<?php echo $form->error($model,'id_materia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
