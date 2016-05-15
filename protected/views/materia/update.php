<?php
/* @var $this MateriaController */
/* @var $model Materia */

$this->breadcrumbs=array(
	'Materias'=>array('index'),
	$model->id_materia=>array('view','id'=>$model->id_materia),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Materias', 'url'=>array('index')),
	array('label'=>'Crear Materia', 'url'=>array('create')),
	array('label'=>'Ver Materia', 'url'=>array('view', 'id'=>$model->id_materia)),
	array('label'=>'Administrar Materia', 'url'=>array('admin')),
);
?>

<h1>Actualizar Materia <?php echo $model->id_materia; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
