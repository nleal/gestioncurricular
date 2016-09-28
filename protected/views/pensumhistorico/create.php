<?php
/* @var $this PensumhistoricoController */
/* @var $model Pensumhistorico */

$this->breadcrumbs=array(
	'Pensumhistoricos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pensumhistorico', 'url'=>array('index')),
	array('label'=>'Manage Pensumhistorico', 'url'=>array('admin')),
);
?>

<script>
function basa2(model){
	console.log("Llegue");
	
	}

</script>


<h1>Cargar  Pénsum</h1>
<hr>
<p class="note">En este módulo podra cargar un pénsum a cualquier departamento , señalando si es el actual o algún histórico.</p>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<script> 
	function basa2(){
				var r = confirm('Ya existe un pensum vigente para ese departamento. Desea actualizar?');
				return r;
			}
			</script>

<?php
    
    $mesa = Yii::app()->user->getFlashes();
    if($mesa){
    foreach($mesa as $key => $message) {
		//echo '<script>alert("Ya existe un pensum vigente para ese departamento")</script>';
       		echo "<script>";
       		//echo "var a = basa2();";
       		echo "</script>";
       		
       		$variablephp = "<script> document.write(a) </script>";
       		if($variablephp){
			//$variablephp = "<script> document.write(a) </script>";
       		//PensumhistoricoController::basa($model);
			}
			//	echo  $variablephp;	        
        //echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }}
?>
