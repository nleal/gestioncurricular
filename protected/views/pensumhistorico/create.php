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

<h1>Cargar  Pensum</h1>
<hr>
<p class="note">En este modulo podra cargar un pensum a cualquier departamento , señalando si es el actual o alguno historico.</p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
