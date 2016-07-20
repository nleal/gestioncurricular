<?php
/* @var $this PensumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pensums',
);

$this->menu=array(
	array('label'=>'Crear Pensum', 'url'=>array('create')),
	array('label'=>'Administrar Pensum', 'url'=>array('admin')),
);
?>

<h1>Pensums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
