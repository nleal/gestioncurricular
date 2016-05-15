<?php
/* @var $this TemaController */
/* @var $model Tema */

$this->breadcrumbs=array(
	'Temas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Temas', 'url'=>array('index')),
	array('label'=>'Administrar Tema', 'url'=>array('admin')),
);
?>

<h1>Crear Tema</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
