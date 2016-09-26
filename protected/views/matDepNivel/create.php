<?php
/* @var $this MatDepNivelController */
/* @var $model MatDepNivel */

$this->breadcrumbs=array(
	'Mat Dep Nivels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MatDepNivel', 'url'=>array('index')),
	array('label'=>'Manage MatDepNivel', 'url'=>array('admin')),
);
?>

<h1>Configuracion por periodos</h1>
<hr>

<?php $this->renderPartial('_form', array('model'=>$model, 'departamentoListData'=>$departamentoListData)); ?>
