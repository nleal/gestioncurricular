<?php
/* @var $this MateriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asignatura',
);

$this->menu=array(
	array('label'=>'Crear Materia', 'url'=>array('create')),
	array('label'=>'Administrar Materia', 'url'=>array('admin')),
);
?>

<h1>Consultar Asignaturas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
