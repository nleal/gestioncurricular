<?php
/* @var $this PensumController */
/* @var $model Pensum */

$this->breadcrumbs=array(
	'Pensums'=>array('index'),
	$model->id_pensum,
);

$this->menu=array(
	array('label'=>'Lista de Pensum', 'url'=>array('index')),
	array('label'=>'Crear Pensum', 'url'=>array('create')),
	array('label'=>'Actualizar Pensum', 'url'=>array('update', 'id'=>$model->id_pensum)),
	array('label'=>'Eliminar Pensum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pensum),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Pensum', 'url'=>array('admin')),
);
?>

<h1>Ver Pensum #<?php echo $model->id_pensum; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pensum',
		'id_departamento',
		'id_materia',
	),
)); ?>
