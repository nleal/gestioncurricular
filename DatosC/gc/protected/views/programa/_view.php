<?php
/* @var $this ProgramaController */
/* @var $data Programa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_programa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_programa), array('view', 'id'=>$data->id_programa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file')); ?>:</b>
	<?php echo CHtml::encode($data->file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_materia')); ?>:</b>
	<?php echo CHtml::encode($data->id_materia); ?>
	<br />


</div>