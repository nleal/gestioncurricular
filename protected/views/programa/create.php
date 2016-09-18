<?php
/* @var $this ProgramaController */
/* @var $model Programa */

$this->breadcrumbs=array(
	'Programas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Programa', 'url'=>array('index')),
	array('label'=>'Manage Programa', 'url'=>array('admin')),
);
?>

<h1>Cargar Programa</h1>
<hr>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>


<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
		echo '<script>alert("Ya existe un Programa vigente para esta materia")</script>';
        //echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>
