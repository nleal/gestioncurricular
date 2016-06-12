<?php
/* @var $this PensumhistoricoController */
/* @var $model Pensumhistorico */

$this->breadcrumbs=array(
	'Pensumhistoricos'=>array('index'),
	$model->id_pensum_hist,
);

$this->menu=array(
	array('label'=>'List Pensumhistorico', 'url'=>array('index')),
	array('label'=>'Create Pensumhistorico', 'url'=>array('create')),
	array('label'=>'Update Pensumhistorico', 'url'=>array('update', 'id'=>$model->id_pensum_hist)),
	array('label'=>'Delete Pensumhistorico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pensum_hist),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pensumhistorico', 'url'=>array('admin')),
);
?>

<h1>View Pensumhistorico #<?php echo $model->id_pensum_hist; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pensum_hist',
		'id_departamento',
		'status',
		'fecha',
		'file',
	),
)); ?>
