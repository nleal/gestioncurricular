<?php
/* @var $this ActaController */
/* @var $model Acta */

$this->breadcrumbs=array(
	'Actas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Acta', 'url'=>array('index')),
	array('label'=>'Editar Acta', 'url'=>array('admin')),
);
?>

<h1>Cargar Acta</h1>
<hr>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
