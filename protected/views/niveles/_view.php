<?php
/* @var $this NivelesController */
/* @var $data Niveles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nivel), array('view', 'id'=>$data->nivel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>