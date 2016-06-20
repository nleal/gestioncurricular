<?php
/* @var $this ProgramaController */
/* @var $model Programa */

$this->breadcrumbs=array(
	'Programas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Programa', 'url'=>array('index')),
	array('label'=>'Manage Programa', 'url'=>array('admin')),
);
?>

<h1>Cargar Programa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
