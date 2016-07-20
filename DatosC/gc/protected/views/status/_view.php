<?php
/* @var $this StatusController */
/* @var $data Status */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_status), array('view', 'id'=>$data->id_status)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />


</div>