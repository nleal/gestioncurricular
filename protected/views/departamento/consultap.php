<?php

$this->breadcrumbs=array(
	'Departamento'=>array('index'),
	'Ver',
);
	
	//para saber donde se esta. Ruta
?>


<h1>Pensum Academico</h1>

<table border="1">
    <table class="normal"><tr><th>#</th> <th>Carrera</th><th>Exportar</th>
    
    <?php foreach ($mode1 as $data) { ?>

    
    <tr><td><?php echo $data->id_departamento?></td>	
    <td><?php echo $data->nombre?></td>
    <td><?php
        echo CHtml::link(
                'Descargar',
                Yii::app()->createUrl('departamento/generarpensum', array('id_departamento'=>$data->id_departamento, 'nombre'=>$data->nombre))
        );
?></td>
    
    
    <?php } ?>
</table>
