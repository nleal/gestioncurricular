<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	$model->id_agenda,
);

$this->menu=array(
	array('label'=>'List Agenda', 'url'=>array('index')),
	array('label'=>'Create Agenda', 'url'=>array('create')),
	array('label'=>'Update Agenda', 'url'=>array('update', 'id'=>$model->id_agenda)),
	array('label'=>'Delete Agenda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_agenda),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Agenda', 'url'=>array('admin')),
);
?>

<h1>View Agenda #<?php echo $model->id_agenda; ?></h1>
<hr>
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
		'file',
	),
)); ?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operaciones',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'art-vmenu'),
		));
		$this->endWidget();
		?>
