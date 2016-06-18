<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Agenda', 'url'=>array('index')),
	array('label'=>'Manage Agenda', 'url'=>array('admin')),
);
?>

<h1>Create Agenda</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>