<?php
/* @var $this TemaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Temas',
);

$this->menu=array(
	array('label'=>'Crear Tema', 'url'=>array('create')),
	array('label'=>'Administrar Tema', 'url'=>array('admin')),
);
?>

<h1>Temas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
