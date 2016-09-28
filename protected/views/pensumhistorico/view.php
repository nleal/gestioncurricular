<?php
/* @var $this PensumhistoricoController */
/* @var $model Pensumhistorico */

$this->breadcrumbs=array(
	'Pensumhistoricos'=>array('index'),
	$model->id_pensum_hist,
);

$this->menu=array(
	array('label'=>'Listar Pénsum', 'url'=>array('index')),
	array('label'=>'Nuevo Pénsum', 'url'=>array('create')),
	array('label'=>'Actualizar Pénsum', 'url'=>array('update', 'id'=>$model->id_pensum_hist)),
	array('label'=>'Eliminar Pénsum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pensum_hist),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Pénsum', 'url'=>array('admin')),
);
?>

<h1>Consulta Pénsum #<?php echo $model->id_pensum_hist; ?></h1>
<hr>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'id_departamento',
		'status',
		'fecha',
		array(               
              'label'=> 'Documento',
              'type'=>'raw',
              'value'=>CHtml::link($model->file, Yii::app()->request->baseUrl."/uploads/".$model->file,array("target"=>"_blank")),
                ),
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

