<?php
/* @var $this PensumhistoricoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pensumhistoricos',
);

$this->menu=array(
	array('label'=>'Create Pensumhistorico', 'url'=>array('create')),
	array('label'=>'Manage Pensumhistorico', 'url'=>array('admin')),
);
?>

<h1>Pensumhistoricos</h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
