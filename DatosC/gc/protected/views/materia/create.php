<?php
/* @var $this MateriaController */
/* @var $model Materia */

$this->breadcrumbs=array(
	'Materias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Materias', 'url'=>array('index')),
	array('label'=>'Administrar Materia', 'url'=>array('admin')),
);
?>

<h1>Crear Materia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
