<?php
/* @var $this MateriaController */
/* @var $model Materia */

$this->breadcrumbs=array(
	'Asignaturas'=>array('index'),
	'Nueva',
);

$this->menu=array(
	array('label'=>'Lista de Materias', 'url'=>array('index')),
	array('label'=>'Administrar Materia', 'url'=>array('admin')),
);
?>

<h1>Nueva Asignatura</h1>
<hr>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>


<?php


		

    foreach(Yii::app()->user->getFlashes() as $key => $message) {
		
		echo '<script>alert("'.$message.'") </script>';
		
		
        //echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>
