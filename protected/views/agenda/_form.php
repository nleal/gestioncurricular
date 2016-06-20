<?php
/* @var $this AgendaController */
/* @var $model Agenda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agenda-form',
	'enableClientValidation' => true,
	'clientOptions' => array(
                            'validateOnSubmit' => true,
                        ),
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con  <span class="required">*</span> son obligatorios</p>

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
		<?php echo $form->labelEx($model,'Estatus'); ?>
			<?php echo $form->dropDownList($model, 'status', CHtml::listData( Status::model()->findAll(), 'id_status', 'nombre')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'temario'); ?>
		<?php echo $form->textField($model,'temario',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'temario'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_usuario'); ?>
		<?php //echo $form->textField($model,'id_usuario',array('value'=>Yii::app()->user->id,'type'=>'hidden')); ?>
		<?php echo '<input type="hidden" name="id_usuario" value="'.Yii::app()->user->id.'">'; ?>
		<?php //echo $form->error($model,'id_usuario'); ?>
		<?php ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'Archivo'); ?>
    <?php echo $form->fileField($model,'file'); ?>
    <?php echo $form->error($model, 'file');
    $infoFieldFile = (end($form->attributes)); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
