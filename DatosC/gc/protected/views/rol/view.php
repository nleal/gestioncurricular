<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Rols'=>array('index'),
	$model->id_tipo,
);

$this->menu=array(
	array('label'=>'List Rol', 'url'=>array('index')),
	array('label'=>'Create Rol', 'url'=>array('create')),
	array('label'=>'Update Rol', 'url'=>array('update', 'id'=>$model->id_tipo)),
	array('label'=>'Delete Rol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rol', 'url'=>array('admin')),
);
?>

<h1>View Rol #<?php echo $model->id_tipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo',
		'rol',
	),
)); ?>
