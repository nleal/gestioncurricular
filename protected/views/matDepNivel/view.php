<?php
/* @var $this MatDepNivelController */
/* @var $model MatDepNivel */

$this->breadcrumbs=array(
	'Mat Dep Nivels'=>array('index'),
	$model->id_mat_dep_nivel,
);

$this->menu=array(
	array('label'=>'List MatDepNivel', 'url'=>array('index')),
	array('label'=>'Create MatDepNivel', 'url'=>array('create')),
	array('label'=>'Update MatDepNivel', 'url'=>array('update', 'id'=>$model->id_mat_dep_nivel)),
	array('label'=>'Delete MatDepNivel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mat_dep_nivel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MatDepNivel', 'url'=>array('admin')),
);
?>

<h1>View MatDepNivel #<?php echo $model->id_mat_dep_nivel; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_materia',
		'id_departamento',
		'nivel',
		'id_mat_dep_nivel',
	),
)); ?>
