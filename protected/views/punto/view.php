<?php
/* @var $this PuntoController */
/* @var $model Punto */

$this->breadcrumbs=array(
	'Puntos'=>array('index'),
	$model->id_punto,
);

$this->menu=array(
	array('label'=>'Lista de Puntos', 'url'=>array('index')),
	array('label'=>'Crear Punto', 'url'=>array('create')),
	array('label'=>'Actualizar Punto', 'url'=>array('update', 'id'=>$model->id_punto)),
	array('label'=>'Eliminar Punto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_punto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Punto', 'url'=>array('admin')),
);
?>

<h1>Ver Punto #<?php echo $model->id_punto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_punto',
		'descripcion',
		'status',
		'id_usuario',
		'id_agenda',
		'id_materia',
	),
)); ?>
