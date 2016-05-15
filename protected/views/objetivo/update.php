<?php
/* @var $this ObjetivoController */
/* @var $model Objetivo */

$this->breadcrumbs=array(
	'Objetivos'=>array('index'),
	$model->id_obj=>array('view','id'=>$model->id_obj),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Objetivos', 'url'=>array('index')),
	array('label'=>'Crear Objetivo', 'url'=>array('create')),
	array('label'=>'Ver Objetivo', 'url'=>array('view', 'id'=>$model->id_obj)),
	array('label'=>'Administrar Objetivo', 'url'=>array('admin')),
);
?>

<h1>Administrar Objetivo <?php echo $model->id_obj; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
