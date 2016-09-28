<?php
/* @var $this ProgramaController */
/* @var $model Programa */

$this->breadcrumbs=array(
	'Programas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Programa', 'url'=>array('index')),
	array('label'=>'Create Programa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#programa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Programas</h1>
<hr>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'programa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
				'name'=>'status',
				'filter'=>CHtml::listData(Status::model()->findAll(),'id_status','nombre'),
				'value'=>'Status::Model()->FindByPk($data->status)->nombre',
				'header'=>'Estatus'
			),
		//'status',
		'fecha',
		'file',
		array(
    'name'=>'id_materia',
    'filter'=>CHtml::activeTextField($model, 'id_materia'),
        'value'=>'Materia::Model()->FindByPk($data->id_materia)->nombre_mat',
        'header'=>'Asignatura',
       
    ),
			array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{delete}',
		),
	),
)); ?>
