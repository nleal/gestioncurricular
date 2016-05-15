<?php
/* @var $this ResolucionController */
/* @var $data Resolucion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('resolucion')); ?>:</b>
	<?php echo CHtml::encode($data->resolucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_materia')); ?>:</b>
	<?php echo CHtml::encode($data->id_materia); ?>
	<br />
	<br />

</div>
