<?php
/* @var $this MateriaController */
/* @var $model Materia */

$this->breadcrumbs=array(
	'Materias'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de Materias', 'url'=>array('index')),
	array('label'=>'Crear Materia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#materia-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Asignaturas</h1>
<hr>


<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'materia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre_mat',
		'descripcion',	
		'cod_materia',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
