<?php
/* @var $this NivelesController */
/* @var $model Niveles */

$this->breadcrumbs=array(
	'Niveles'=>array('index'),
	$model->nivel=>array('view','id'=>$model->nivel),
	'Update',
);

$this->menu=array(
	array('label'=>'List Niveles', 'url'=>array('index')),
	array('label'=>'Create Niveles', 'url'=>array('create')),
	array('label'=>'View Niveles', 'url'=>array('view', 'id'=>$model->nivel)),
	array('label'=>'Manage Niveles', 'url'=>array('admin')),
);
?>

<h1>Update Niveles <?php echo $model->nivel; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>