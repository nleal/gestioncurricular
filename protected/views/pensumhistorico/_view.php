<?php
/* @var $this PensumhistoricoController */
/* @var $data Pensumhistorico */
?>

<div class="view">

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_departamento')); ?>:</b>
	<?php echo CHtml::encode($data->id_departamento); ?>
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


</div>
