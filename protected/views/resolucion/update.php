<?php
/* @var $this ResolucionController */
/* @var $model Resolucion */

$this->breadcrumbs=array(
	'Resolucions'=>array('index'),
	$model->id_resolucion=>array('view','id'=>$model->id_resolucion),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Resoluciones', 'url'=>array('index')),
	array('label'=>'Crear Resolución', 'url'=>array('create')),
	array('label'=>'Ver Resolución', 'url'=>array('view', 'id'=>$model->id_resolucion)),
	array('label'=>'Administrar Resolución', 'url'=>array('admin')),
);
?>

<h1>Actualizar Resolución <?php echo $model->id_resolucion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
