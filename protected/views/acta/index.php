<?php
/* @var $this ActaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Actas',
);

$this->menu=array(
	array('label'=>'Create Acta', 'url'=>array('create')),
	array('label'=>'Manage Acta', 'url'=>array('admin')),
);
?>

<h1>Actas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
