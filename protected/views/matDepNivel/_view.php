<?php
/* @var $this MatDepNivelController */
/* @var $data MatDepNivel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mat_dep_nivel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mat_dep_nivel), array('view', 'id'=>$data->id_mat_dep_nivel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_materia')); ?>:</b>
	<?php echo CHtml::encode($data->id_materia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_departamento')); ?>:</b>
	<?php echo CHtml::encode($data->id_departamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
	<?php echo CHtml::encode($data->nivel); ?>
	<br />


</div>