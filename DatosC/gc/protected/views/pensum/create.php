<?php
/* @var $this PensumController */
/* @var $model Pensum */

$this->breadcrumbs=array(
	'Pensums'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Pensum', 'url'=>array('index')),
	array('label'=>'Administrar Pensum', 'url'=>array('admin')),
);
?>

<h1>Crear Pensum</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
