<?php
/* @var $this NivelesController */
/* @var $model Niveles */

$this->breadcrumbs=array(
	'Niveles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Niveles', 'url'=>array('index')),
	array('label'=>'Manage Niveles', 'url'=>array('admin')),
);
?>

<h1>Create Niveles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>