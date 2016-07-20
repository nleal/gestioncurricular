<?php
/* @var $this TemaController */
/* @var $model Tema */

$this->breadcrumbs=array(
	'Temas'=>array('index'),
	$model->id_tema,
);

$this->menu=array(
	array('label'=>'Lista de Temas', 'url'=>array('index')),
	array('label'=>'Crear Tema', 'url'=>array('create')),
	array('label'=>'Actualizar Tema', 'url'=>array('update', 'id'=>$model->id_tema)),
	array('label'=>'Eliminar Tema', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tema),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tema', 'url'=>array('admin')),
);
?>

<h1>Ver Tema #<?php echo $model->id_tema; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'descripcion',
		'status',
		'titulo',
		'id_tema',
		'id_materia',
	),
)); ?>
