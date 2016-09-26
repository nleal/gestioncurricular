<?php
/* @var $this MateriaController */
/* @var $model Materia */

$this->breadcrumbs=array(
	'Asignaturas'=>array('index'),
	$model->id_materia,
);

$this->menu=array(
	array('label'=>'Lista de Materias', 'url'=>array('index')),
	array('label'=>'Crear Materia', 'url'=>array('create')),
	array('label'=>'Actualizar Materia', 'url'=>array('update', 'id'=>$model->id_materia)),
	array('label'=>'Eliminar Materia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_materia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Materia', 'url'=>array('admin')),
);
?>

<h1>Asignatura : <?php echo $model->cod_materia; ?></h1>
<hr>
	  
	  
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	
	/*array(
	'name'=>'status',
    'value'=>Status::Model()->FindByPk($data->status)->nombre,
    ),*/
    'nombre_mat',
    'descripcion',
    array(
    'name'=>'id_departamento',
    'type'=>'raw',
    'value'=>Departamento::Model()->FindByPk($model->id_departamento)->nombre
    
     ),
     'cod_materia'
		/*'nombre_mat',
		'descripcion',
		'id_departamento',
		'id_materia',
		'cod_materia',*/
	),
)); ?>


<?php echo CHtml::link('Editar Asignatura',Yii::app()->createUrl('materia/update', array('update', 'id'=>$model->id_materia)  )) ;?>


