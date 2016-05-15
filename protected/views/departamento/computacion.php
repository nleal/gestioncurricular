<?php

$this->breadcrumbs=array(
	'Departamento'=>array('index'),
	'Ver',
);
	
	//para saber donde se esta. Ruta
?>



<h1>Pensum Academico</h1>

<table border="1">
    <table class="normal"><tr><th>#</th> <th>Materia</th><th>Exportar</th>
    
    <?php foreach ($mode1 as $data) { ?>

    
    <tr><td><?php echo $data->id_materia?></td>	
    <td><?php echo $data->nombre_mat?></td>
    <td><?php
        echo CHtml::link(
                'Descargar',
                Yii::app()->createUrl('departamento/generarpdf', array('id_materia'=>$data->id_materia,'nombre_mat'=>$data->nombre_mat))
        );
?></td>
    
    
    <?php } ?>
</table>
