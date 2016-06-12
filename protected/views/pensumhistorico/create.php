<?php
/* @var $this PensumhistoricoController */
/* @var $model Pensumhistorico */

$this->breadcrumbs=array(
	'Pensumhistoricos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pensumhistorico', 'url'=>array('index')),
	array('label'=>'Manage Pensumhistorico', 'url'=>array('admin')),
);
?>

<h1>Create Pensumhistorico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>