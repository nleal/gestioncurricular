<?php
/* @var $this ObjetivoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Objetivos',
);

$this->menu=array(
	array('label'=>'Crear Objetivo', 'url'=>array('create')),
	array('label'=>'Administrar Objetivo', 'url'=>array('admin')),
);
?>

<h1>Objetivos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
