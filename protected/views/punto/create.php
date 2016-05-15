<?php
/* @var $this PuntoController */
/* @var $model Punto */

$this->breadcrumbs=array(
	'Puntos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Puntos', 'url'=>array('index')),
	array('label'=>'Administrar Punto', 'url'=>array('admin')),
);
?>

<h1>Crear Punto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
