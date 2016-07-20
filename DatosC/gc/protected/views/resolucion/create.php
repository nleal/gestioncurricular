<?php
/* @var $this ResolucionController */
/* @var $model Resolucion */

$this->breadcrumbs=array(
	'Resolucions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Resoluciones', 'url'=>array('index')),
	array('label'=>'Administrar Resolución', 'url'=>array('admin')),
);
?>

<h1>Crear Resolución</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
