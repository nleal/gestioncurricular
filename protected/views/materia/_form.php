<?php
/* @var $this MateriaController */
/* @var $model Materia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'materia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_mat'); ?>
		<?php echo $form->textField($model,'nombre_mat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre_mat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model, 'status', CHtml::listData( Status::model()->findAll(), 'id_status', 'nombre')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_departamento'); ?>
		<?php echo $form->dropDownList($model, 'id_departamento', CHtml::listData( Departamento::model()->findAll(), 'id_departamento', 'nombre'),array('empty'=>'Seleccione...', 'id_departamento'=>'id_departamento')); ?>
   	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_materia'); ?>
		<?php echo $form->textField($model,'cod_materia',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cod_materia'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'Código de materia relacionada'); ?>
		<?php echo $form->textField($model,'cod_materia_padre',array('size'=>10,'maxlength'=>10)); ?>
		
	</div>


	<div class="row buttons  buttonSave">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->





