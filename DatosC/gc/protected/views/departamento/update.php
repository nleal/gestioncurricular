<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */

$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->id_departamento=>array('view','id'=>$model->id_departamento),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Departamento', 'url'=>array('index')),
	array('label'=>'Crear Departamento', 'url'=>array('create')),
	array('label'=>'Ver Departamento', 'url'=>array('view', 'id'=>$model->id_departamento)),
	array('label'=>'Administrar Departamento', 'url'=>array('admin')),
);
?>

<h1>Actualizar Departamento <?php echo $model->id_departamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
