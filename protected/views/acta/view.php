<?php
/* @var $this ActaController */
/* @var $model Acta */

$this->breadcrumbs=array(
	'Actas'=>array('index'),
	$model->id_acta,
);

$this->menu=array(
	array('label'=>'List Acta', 'url'=>array('index')),
	array('label'=>'Create Acta', 'url'=>array('create')),
	array('label'=>'Update Acta', 'url'=>array('update', 'id'=>$model->id_acta)),
	array('label'=>'Delete Acta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_acta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Acta', 'url'=>array('admin')),
);
?>

<h1>View Acta #<?php echo $model->id_acta; ?></h1>
<hr>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_acta',
		'reunion',
		'id_agenda',
		'lugar',
		'hora',
		'fecha',
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
