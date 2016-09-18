<?php
/* @var $this PensumhistoricoController */
/* @var $model Pensumhistorico */

$this->breadcrumbs=array(
	'Pensumhistoricos'=>array('index'),
	$model->id_pensum_hist,
);

$this->menu=array(
	array('label'=>'Listar Pensum', 'url'=>array('index')),
	array('label'=>'Nuevo Pensum', 'url'=>array('create')),
	array('label'=>'Actualizar Pensum', 'url'=>array('update', 'id'=>$model->id_pensum_hist)),
	array('label'=>'Eliminar Pensum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pensum_hist),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Pensum', 'url'=>array('admin')),
);
?>

<h1>Consulta Pensum #<?php echo $model->id_pensum_hist; ?></h1>
<hr>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pensum_hist',
		'id_departamento',
		'status',
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

