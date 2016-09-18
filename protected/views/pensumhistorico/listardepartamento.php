<?php

$this->breadcrumbs=array(
	'Departamento'=>array('index'),
	'Ver',
);
	
	//para saber donde se esta. Ruta
?>



<script>

		$(document).ready(function(){
	
		$('#depart').val('Computacion');
		
	    $("select[name=depart]").change(function(){
		   
		   id_departamento = $('select[name=depart]').val();
		   
		   $.ajax({
	       //url: "mostrarmatriz",
	       url: <?php echo "'".CController::createUrl('pensaumhistorico/mostrar')."'"; ?>,
               
	       type: "GET",
	       data: {'id_departamento' : $('select[name=depart]').val()},
	       dataType: 'json',
	       success: function(data){
			   $("#mostrar_matriz").html(data.message);
	       },
	       error: function(data){
			   console.log(data);
			   alert('ERROOOOOOOOOOOOOOOOOOOOOOOOOOOOOOR');
			   },
	        });
	    });
	    
	    $('#depart').trigger('change');	
	    
	});
	</script>


<h1>Programas por Departamento</h1>

<hr>


<div id="selectDept" class="selectDept" >
 <select name="depart" id="depart">
	
<?php foreach($mode1 as $data): ?>
	<h1><?php //echo $data->id_matriz.' - '. $data->nombre_matriz;?></h1>
    <option value="<?php echo $data->id_departamento?>"><?php echo $data->nombre?></option>
<?php endforeach; ?>
 </select>	
 <div>
 
 <div id="mostrar_matriz">
 

 
 </div>

