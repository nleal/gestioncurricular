<?php
/* @var $this ObjetivoController */
/* @var $model Objetivo */

$this->breadcrumbs=array(
	'Objetivos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Objetivos', 'url'=>array('index')),
	array('label'=>'Administrar Objetivo', 'url'=>array('admin')),
);
?>

<h1>Create Objetivo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
