<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Agenda', 'url'=>array('index')),
	array('label'=>'Create Agenda', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#agenda-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Agendas</h1>
<hr>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'agenda-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'num_agenda',
		'lugar',
		'fecha',
		'hora',
		'fecha_creacion',
		'fecha_cierre',
		/*
		'status',
		'temario',
		'id_usuario',
		'id_acta',
		'file',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
