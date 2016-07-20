<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */

$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->id_departamento,
);

$this->menu=array(
	array('label'=>'Listar Departamento', 'url'=>array('index')),
	array('label'=>'Crear Departamento', 'url'=>array('create')),
	array('label'=>'Actualizar Departamento', 'url'=>array('update', 'id'=>$model->id_departamento)),
	array('label'=>'Eliminar Departamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_departamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Departamento', 'url'=>array('admin')),
);
?>

<h1> Departamento de <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'id_departamento',
	),
)); ?>
