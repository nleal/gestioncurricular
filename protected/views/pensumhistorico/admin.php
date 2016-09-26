<?php
/* @var $this PensumhistoricoController */
/* @var $model Pensumhistorico */

$this->breadcrumbs=array(
	'Pensum'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Pensum', 'url'=>array('index')),
	array('label'=>'Nuevo Pensum', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pensumhistorico-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Pensum</h1>
<hr>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pensumhistorico-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
//        'id_pensum_hist',
//        'nombre_dep',
//        'status',
//        'fecha',
//        'file',
   
/*    array(
        'name'=>'id_pensum_hist',
    'filter'=>CHtml::activeTextField($model, 'id_pensum_hist'),
        'value'=>'$data->id_pensum_hist',
        'header'=>'ID'
    ),*/
    array(
    'name'=>'id_departamento',
    'filter'=>CHtml::activeTextField($model, 'id_departamento'),
        'value'=>'Departamento::Model()->FindByPk($data->id_departamento)->nombre',
        'header'=>'Departamento',
       
    ),
    array(
		'name'=>'status',
		'filter'=>CHtml::activeTextField($model, 'status'),
        'value'=>'Status::Model()->FindByPk($data->status)->nombre',
        'header'=>'Estatus'
    ),
    array(

        'value'=>'$data->fecha',
        'header'=>'Fecha'
    ),
    array(

        'value'=>'$data->file',
        'header'=>'Archivo'
    ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>





