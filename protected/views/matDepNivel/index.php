<?php
/* @var $this MatDepNivelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mat Dep Nivels',
);

$this->menu=array(
	array('label'=>'Create MatDepNivel', 'url'=>array('create')),
	array('label'=>'Manage MatDepNivel', 'url'=>array('admin')),
);
?>

<h1>Mat Dep Nivels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
