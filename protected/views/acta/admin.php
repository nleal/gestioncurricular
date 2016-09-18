<?php
/* @var $this ActaController */
/* @var $model Acta */

$this->breadcrumbs=array(
	'Actas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Acta', 'url'=>array('index')),
	array('label'=>'Create Acta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#acta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Actas</h1>
<hr>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'acta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_acta',
		'reunion',
		'id_agenda',
		'lugar',
		'hora',
		'fecha',
		/*'file',*/
		array(               
                  'header'=>'Documento',
                  'type'=>'raw',
                  'value'=>'CHtml::link($data->file, Yii::app()->request->baseUrl."/uploads/".$data->file,array("target"=>"_blank"))',
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
