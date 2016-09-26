<?php
/* @var $this NivelesController */
/* @var $model Niveles */

$this->breadcrumbs=array(
	'Niveles'=>array('index'),
	$model->nivel,
);

$this->menu=array(
	array('label'=>'List Niveles', 'url'=>array('index')),
	array('label'=>'Create Niveles', 'url'=>array('create')),
	array('label'=>'Update Niveles', 'url'=>array('update', 'id'=>$model->nivel)),
	array('label'=>'Delete Niveles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nivel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Niveles', 'url'=>array('admin')),
);
?>

<h1>View Niveles #<?php echo $model->nivel; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nivel',
		'descripcion',
	),
)); ?>
