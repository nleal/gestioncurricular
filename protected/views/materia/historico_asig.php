<?php

$this->breadcrumbs=array(
	'Departamento'=>array('index'),
	'Ver',
);
	
	//para saber donde se esta. Ruta
?>

	
<h1>Historico de Asignatura</h1>
<hr>

<table border="1">
    <table class="normal"><tr><th>#</th> <th>Carrera</th><th>Exportar</th>
    
    <?php foreach ($mode1 as $data) { ?>

    
    <tr><td><?php echo $data->id_materia?></td>	
    <td><?php echo $data->nombre_mat?></td>
    <td><?php
        echo CHtml::link(
                'Ver',
                Yii::app()->createUrl('materia/Lista_Actas_Materia', array('id_materia'=>$data->id_materia))
        );
?></td>
    
    
    <?php } ?>
</table>

