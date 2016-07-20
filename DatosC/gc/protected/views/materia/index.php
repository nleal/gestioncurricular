<?php
/* @var $this MateriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Materias',
);

$this->menu=array(
	array('label'=>'Crear Materia', 'url'=>array('create')),
	array('label'=>'Administrar Materia', 'url'=>array('admin')),
);
?>

<h1>Materias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
