<?php
/* @var $this MatDepNivelController */
/* @var $model MatDepNivel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mat-dep-nivel-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


  <div class="row">
        <?php echo $form->labelEx($model,'id_departamento'); ?>
        <?php
        echo $form->dropDownList($model, 'id_departamento', $departamentoListData, array(
            'ajax'=>array(
                'type'=>'POST',
                'url'=>$this->createUrl('materiaselecionar'),
                'update'=>'#' . CHtml::activeId($model, 'id_materia')
            ), 'prompt'=>'-- Selecciona Estado --'
        ));
        ?>
        <?php echo $form->error($model,'id_departamento'); ?>
   </div>




    
      <div class="row">
                <?php echo $form->labelEx($model,'id_materia'); ?>
        <?php echo $form->dropDownList($model,'id_materia',array(
        'prompt' => 'Seleccione un Materia...'
        )
        ); ?>
        <?php echo $form->error($model,'id_materia'); ?>
        </div>




	<div class="row">
		<?php echo $form->labelEx($model,'nivel'); ?>
		<?php echo $form->textField($model,'nivel'); ?>
		<?php echo $form->error($model,'nivel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
