<?php
/* @var $this MatDepNivelController */
/* @var $model MatDepNivel */

$this->breadcrumbs=array(
	'Mat Dep Nivels'=>array('index'),
	$model->id_mat_dep_nivel=>array('view','id'=>$model->id_mat_dep_nivel),
	'Update',
);

$this->menu=array(
	array('label'=>'List MatDepNivel', 'url'=>array('index')),
	array('label'=>'Create MatDepNivel', 'url'=>array('create')),
	array('label'=>'View MatDepNivel', 'url'=>array('view', 'id'=>$model->id_mat_dep_nivel)),
	array('label'=>'Manage MatDepNivel', 'url'=>array('admin')),
);
?>

<h1>Update MatDepNivel <?php echo $model->id_mat_dep_nivel; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>