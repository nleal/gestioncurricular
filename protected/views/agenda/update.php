<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	$model->id_agenda=>array('view','id'=>$model->id_agenda),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Agendas', 'url'=>array('index')),
	array('label'=>'Crear Agenda', 'url'=>array('create')),
	array('label'=>'Ver Agenda', 'url'=>array('view', 'id'=>$model->id_agenda)),
	array('label'=>'Administrar Agenda', 'url'=>array('admin')),
);
?>

<h1>Actualizar Agenda <?php echo $model->id_agenda; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
