<?php
/* @var $this TemaController */
/* @var $model Tema */

$this->breadcrumbs=array(
	'Temas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de Temas', 'url'=>array('index')),
	array('label'=>'Crear Tema', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tema-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Temas</h1>

<p>
Puedes usar los siguientes operadores opcionalmente (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar la forma en la comparación debe hacerse.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tema-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'descripcion',
		'status',
		'titulo',
		'id_tema',
		'id_materia',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
