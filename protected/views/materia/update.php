<?php
/* @var $this MateriaController */
/* @var $model Materia */

$this->breadcrumbs=array(
	'Materias'=>array('index'),
	$model->id_materia=>array('view','id'=>$model->id_materia),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Materias', 'url'=>array('index')),
	array('label'=>'Crear Materia', 'url'=>array('create')),
	array('label'=>'Ver Materia', 'url'=>array('view', 'id'=>$model->id_materia)),
	array('label'=>'Administrar Materia', 'url'=>array('admin')),
);
?>

<h1>Actualizar Asignatura <?php echo $model->nombre_mat; ?></h1>
<hr>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>



<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
		
		echo '<script>alert("'.$message.'") </script>';
    }
?>
