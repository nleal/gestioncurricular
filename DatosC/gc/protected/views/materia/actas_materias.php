<?php

$this->breadcrumbs=array(
	'Departamento'=>array('index'),
	'Ver',
);
	
	//para saber donde se esta. Ruta
?>

	
<h1>Historico de Materia</h1>

<table border="1">
    <table class="normal"><tr><th>#</th> <th>Carrera</th><th>Exportar</th>
    
    <?php foreach ($mode1 as $data) { ?>

    
    <tr><td><?php echo $data->id_acta?></td>	
    <td><?php echo $data->reunion?></td>
    <td><?php
        echo CHtml::link(
                'Ver',
                Yii::app()->createUrl('materia/reporte_acta', array('id_acta'=>$data->id_acta))
        );
?></td>
     
    
    <?php } ?>
</table>

