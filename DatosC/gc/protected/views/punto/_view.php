<?php
/* @var $this PuntoController */
/* @var $data Punto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

</div>
