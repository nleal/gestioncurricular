<?php
/* @var $this ObjetivoController */
/* @var $model Objetivo */

$this->breadcrumbs=array(
	'Objetivos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de Objetivos', 'url'=>array('index')),
	array('label'=>'Crear Objetivo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#objetivo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Objetivos</h1>

<p>
Puedes usar los siguientes operadores opcionalmente (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar la forma en la comparación debe hacerse.</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'objetivo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'descripcion',
		'nombre',
		'id_materia',
		'id_obj',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
