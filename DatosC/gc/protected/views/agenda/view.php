<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	$model->id_agenda,
);

$this->menu=array(
	array('label'=>'Lista de Agendas', 'url'=>array('index')),
	array('label'=>'Crear Agenda', 'url'=>array('create')),
	array('label'=>'Actualizar Agenda', 'url'=>array('update', 'id'=>$model->id_agenda)),
	array('label'=>'Eliminar Agenda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_agenda),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Agenda', 'url'=>array('admin')),
);
?>

<h1>Ver Agenda #<?php echo $model->id_agenda; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_agenda',
		'lugar',
		'fecha',
		'hora',
		'fecha_creacion',
		'fecha_cierre',
		'status',
		'temario',
		'id_usuario',
		'id_acta',
	),
)); ?>