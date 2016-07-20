<?php

$this->breadcrumbs=array(
	'Departamento'=>array('index'),
	'Ver',
);
	
	//para saber donde se esta. Ruta
?>



<script>

		$(document).ready(function(){
	
		$('#depart').val('algoritmo');
		
	    $("select[name=depart]").change(function(){
		   
		   id_departamento = $('select[name=depart]').val();
		   
		   $.ajax({
	       //url: "mostrarmatriz",
	       url: <?php echo "'".CController::createUrl('departamento/reporte')."'"; ?>,
               
	       type: "GET",
	       data: {'id_materia' : $('select[name=depart]').val()},
	       dataType: 'json',
	       success: function(data){
			   $("#mostrar_matriz").html(data.message);
	       },
	       error: function(data){
			   console.log(data);
			   alert('ERROR');
			   },
	        });
	    });
	    
	    $('#depart').trigger('change');	
	    
	});
	</script>


<h1>Historico de Materias</h1>



<center>

<select name="depart" id="depart">
<?php foreach($mode1 as $data): ?>
	
    <option value="<?php echo $data->id_materia?>"><?php echo $data->nombre_mat?></option>
<?php endforeach; ?>
 </select>	
 
 <div id="mostrar_matriz"></div>
</center>
