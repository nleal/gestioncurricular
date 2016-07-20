<?php
/* @var $this AgendaController */
/* @var $model Agenda */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_agenda'); ?>
		<?php echo $form->textField($model,'id_agenda'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora'); ?>
		<?php echo $form->textField($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_cierre'); ?>
		<?php echo $form->textField($model,'fecha_cierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'temario'); ?>
		<?php echo $form->textField($model,'temario',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_acta'); ?>
		<?php echo $form->textField($model,'id_acta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
