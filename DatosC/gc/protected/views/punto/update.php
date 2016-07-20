<?php
/* @var $this PuntoController */
/* @var $model Punto */

$this->breadcrumbs=array(
	'Puntos'=>array('index'),
	$model->id_punto=>array('view','id'=>$model->id_punto),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Puntos', 'url'=>array('index')),
	array('label'=>'Crear Punto', 'url'=>array('create')),
	array('label'=>'Ver Punto', 'url'=>array('view', 'id'=>$model->id_punto)),
	array('label'=>'Administrar Punto', 'url'=>array('admin')),
);
?>

<h1>Actualizar Punto <?php echo $model->id_punto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
