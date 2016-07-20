<?php
/* @var $this ResolucionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Resolucions',
);

$this->menu=array(
	array('label'=>'Crear Resolución', 'url'=>array('create')),
	array('label'=>'Administrar Resolución', 'url'=>array('admin')),
);
?>

<h1>Resoluciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
