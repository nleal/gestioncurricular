<?php
/* @var $this MateriaController */
/* @var $data Materia */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_mat')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_mat); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_materia')); ?>:</b>
	<?php echo CHtml::encode($data->cod_materia); ?>
	<br />
	<br />

</div>
