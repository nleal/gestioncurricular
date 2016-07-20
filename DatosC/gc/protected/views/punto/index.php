<?php
/* @var $this PuntoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Puntos',
);

$this->menu=array(
	array('label'=>'Crear Punto', 'url'=>array('create')),
	array('label'=>'Administrar Punto', 'url'=>array('admin')),
);
?>

<h1>Puntos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
