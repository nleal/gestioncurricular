<?php
/* @var $this ActaController */
/* @var $data Acta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_acta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_acta), array('view', 'id'=>$data->id_acta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reunion')); ?>:</b>
	<?php echo CHtml::encode($data->reunion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_agenda')); ?>:</b>
	<?php echo CHtml::encode($data->id_agenda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar')); ?>:</b>
	<?php echo CHtml::encode($data->lugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file')); ?>:</b>
	<?php echo CHtml::encode($data->file); ?>
	<br />


</div>