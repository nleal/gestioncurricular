<?php
/* @var $this ResolucionController */
/* @var $model Resolucion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_resolucion'); ?>
		<?php echo $form->textField($model,'id_resolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_acta'); ?>
		<?php echo $form->textField($model,'id_acta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_punto'); ?>
		<?php echo $form->textField($model,'id_punto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resolucion'); ?>
		<?php echo $form->textField($model,'resolucion',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_materia'); ?>
		<?php echo $form->textField($model,'id_materia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
