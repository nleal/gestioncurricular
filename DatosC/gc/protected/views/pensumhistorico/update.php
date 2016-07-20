<?php
/* @var $this PensumhistoricoController */
/* @var $model Pensumhistorico */

$this->breadcrumbs=array(
	'Pensumhistoricos'=>array('index'),
	$model->id_pensum_hist=>array('view','id'=>$model->id_pensum_hist),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pensumhistorico', 'url'=>array('index')),
	array('label'=>'Create Pensumhistorico', 'url'=>array('create')),
	array('label'=>'View Pensumhistorico', 'url'=>array('view', 'id'=>$model->id_pensum_hist)),
	array('label'=>'Manage Pensumhistorico', 'url'=>array('admin')),
);
?>

<h1>Update Pensumhistorico <?php echo $model->id_pensum_hist; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>