<?php
/* @var $this ResolucionController */
/* @var $model Resolucion */

$this->breadcrumbs=array(
	'Resolucions'=>array('index'),
	$model->id_resolucion,
);

$this->menu=array(
	array('label'=>'Lista de Resoluciones', 'url'=>array('index')),
	array('label'=>'Crear Resolución', 'url'=>array('create')),
	array('label'=>'Actualizar Resolución', 'url'=>array('update', 'id'=>$model->id_resolucion)),
	array('label'=>'Eliminar Resolución', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_resolucion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Resolución', 'url'=>array('admin')),
);
?>

<h1>Ver Resolución #<?php echo $model->id_resolucion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_resolucion',
		'id_acta',
		'id_punto',
		'resolucion',
		'id_materia',
	),
)); ?>
