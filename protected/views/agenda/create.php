<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Agendas', 'url'=>array('index')),
	array('label'=>'Administrar Agenda', 'url'=>array('admin')),
);
?>

<h1>Crear Agenda</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
