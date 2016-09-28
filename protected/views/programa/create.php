<?php
/* @var $this ProgramaController */
/* @var $model Programa */

$this->breadcrumbs=array(
	'Programas'=>array('index'),
	'Create',
);

	$departamentoListData = CHtml::listData(Departamento::model()->findAll(), 'id_departamento', 'nombre');
	
$this->menu=array(
	array('label'=>'List Programa', 'url'=>array('index')),
	array('label'=>'Manage Programa', 'url'=>array('admin')),
);
?>


<h1>Cargar Programa</h1>
<hr>
<?php $this->renderPartial('_form', array('model'=>$model,'departamentoListData'=>$departamentoListData)); ?>



<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
		echo '<script>alert("Ya existe un Programa vigente para esta materia")</script>';
        //echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>


