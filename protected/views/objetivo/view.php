<?php
/* @var $this ObjetivoController */
/* @var $model Objetivo */

$this->breadcrumbs=array(
	'Objetivos'=>array('index'),
	$model->id_obj,
);

$this->menu=array(
	array('label'=>'Lista de Objetivos', 'url'=>array('index')),
	array('label'=>'Crear Objetivo', 'url'=>array('create')),
	array('label'=>'Actualizar Objetivo', 'url'=>array('update', 'id'=>$model->id_obj)),
	array('label'=>'Eliminar Objetivo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_obj),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Objetivo', 'url'=>array('admin')),
);
?>

<h1>Ver Objetivo #<?php echo $model->id_obj; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'descripcion',
		'nombre',
		'id_materia',
		'id_obj',
	),
)); ?>
