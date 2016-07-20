<?php
/* @var $this PuntoController */
/* @var $model Punto */

$this->breadcrumbs=array(
	'Puntos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de Puntos', 'url'=>array('index')),
	array('label'=>'Crear Punto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#punto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Puntos</h1>

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
	'id'=>'punto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_punto',
		'descripcion',
		'status',
		'id_usuario',
		'id_agenda',
		'id_materia',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
