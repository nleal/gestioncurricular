<?php
/* @var $this TemaController */
/* @var $model Tema */

$this->breadcrumbs=array(
	'Temas'=>array('index'),
	$model->id_tema=>array('view','id'=>$model->id_tema),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Temas', 'url'=>array('index')),
	array('label'=>'Crear Tema', 'url'=>array('create')),
	array('label'=>'Ver Tema', 'url'=>array('view', 'id'=>$model->id_tema)),
	array('label'=>'Administrar Tema', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tema <?php echo $model->id_tema; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
