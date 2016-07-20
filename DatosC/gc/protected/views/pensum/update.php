<?php
/* @var $this PensumController */
/* @var $model Pensum */

$this->breadcrumbs=array(
	'Pensums'=>array('index'),
	$model->id_pensum=>array('view','id'=>$model->id_pensum),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Pensum', 'url'=>array('index')),
	array('label'=>'Crear Pensum', 'url'=>array('create')),
	array('label'=>'Ver Pensum', 'url'=>array('view', 'id'=>$model->id_pensum)),
	array('label'=>'Administrar Pensum', 'url'=>array('admin')),
);
?>

<h1>Actualizar Pensum <?php echo $model->id_pensum; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
