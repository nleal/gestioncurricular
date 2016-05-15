<?php
/* @var $this AgendaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agendas',
);

$this->menu=array(
	array('label'=>'Crear Agenda', 'url'=>array('create')),
	array('label'=>'Administrar Agenda', 'url'=>array('admin')),
);
?>

<h1>Agendas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
