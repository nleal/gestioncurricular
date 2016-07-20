<?php
/* @var $this PensumController */
/* @var $data Pensum */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_departamento')); ?>:</b>
	<?php echo CHtml::encode($data->id_departamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_materia')); ?>:</b>
	<?php echo CHtml::encode($data->id_materia); ?>
	<br />
	<br />

</div>
