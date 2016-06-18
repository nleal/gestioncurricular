<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	$model->id_agenda=>array('view','id'=>$model->id_agenda),
	'Update',
);

$this->menu=array(
	array('label'=>'List Agenda', 'url'=>array('index')),
	array('label'=>'Create Agenda', 'url'=>array('create')),
	array('label'=>'View Agenda', 'url'=>array('view', 'id'=>$model->id_agenda)),
	array('label'=>'Manage Agenda', 'url'=>array('admin')),
);
?>

<h1>Update Agenda <?php echo $model->id_agenda; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>