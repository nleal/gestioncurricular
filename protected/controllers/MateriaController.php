<?php

Yii::import('application.vendor.mpdf.*');
require_once('mpdf.php');


class MateriaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','lista_materia','lista_actas_materia','reporte_acta','historico','listarhistoricomatria','generarpensum'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','lista_materia','lista_actas_materia', 'reporte_acta', 'hisotrico','listarhistoricomatria', 'generarpensum'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Materia;

		if(isset($_POST['Materia']))
		{
			
			$model->attributes=$_POST['Materia'];
			$r = Materia::model()->find("cod_materia='".$model->cod_materia."'");
			
			if ($model->cod_materia == null)	{  //Si el codigo de la materia es nulo 
				Yii::app()->user->setFlash('error', "El código de la asignatura es obligatorio  ");
			}
			else{
			
			 if($r){ // Valida si el codigo ya fue usado por otra materia
					Yii::app()->user->setFlash('error', "Ya existe una Asignatura con el codigo  ".$model->cod_materia);
			//		error_log('codigo de materia repetido ');	
			 }else{			
					$cod_p = false; // El codigo padre viene vacio 
			
					if ($model->cod_materia_padre != null){
						$cod_p = true;
						$var = $model->cod_materia_padre;
						
						$x = Materia::model()->find("cod_materia='".$model->cod_materia_padre."'");
				//		error_log('el codigo padre viene con valor');
						
						
					}
					
					if(!$x && $cod_p == true){ //Viene un codigo y el codigo no existe 
							Yii::app()->user->setFlash('error', "El código de la Asignatura a relacionar no existe.");
			
						}else if ($cod_p && $x) {
							
							if($model->save()){
					//			error_log('GUARDO LA MATERIA');
								
								}  // Si el codigo a relacionar viene nulo debe guardar 
								error_log('agregar hijos');
								$cli = new MiCliente();
								$res = $cli->padres_materia($var);
						//		error_log('codigo a buscar '.$var);
								
								error_log($res);
								if($res){
									$res_js=json_decode($res);
									foreach( $res_js as $itb){
														
										$sql = Yii::app()->db->createCommand()->insert('relacion_materia',array('id_materia_hija'=>$model->id_materia,'id_materia_padre'=>$itb->id_materia_padre));			
										$sql = Yii::app()->db->createCommand()->insert('relacion_materia',array('id_materia_hija'=>$model->id_materia,'id_materia_padre'=>$itb->id_materia_hija));			
									}
							//		error_log('SALI del for');
				
								}else {
									
									$sql = Yii::app()->db->createCommand()->insert('relacion_materia',array('id_materia_hija'=>$model->id_materia,'id_materia_padre'=>$x->id_materia));
								//	error_log('No trajo informacion');
								}
							//error_log('ahora guardar materia');
							
									
									$this->redirect(array('view','id'=>$model->id_materia));
							} else {
								
								
									if($model->save())  // Si el codigo a relacionar viene nulo debe guardar 
									$this->redirect(array('view','id'=>$model->id_materia));
							}
						
			}// fin del segundo else. El codigo de la materia ya esta siendo usado 	
		} // fin del primer else 
	} //fin del isset

		$this->render('create',array(
			'model'=>$model,
		));
	} // fin de la funcion 


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	 
	 /*
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		error_log('entre al update......................');	
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Materia']))
		{
			$model->attributes=$_POST['Materia'];
			//if($model->save())
				//$this->redirect(array('view','id'=>$model->id_materia));
				
		
				
					$r = Materia::model()->find("cod_materia='".$model->cod_materia."' and id_materia <> '".$model->id_materia."'");
					$r1 = Materia::model()->find("cod_materia='".$model->id_materia."'");
			
			if ($model->cod_materia == null)	{  //Si el codigo de la materia es nulo 
				Yii::app()->user->setFlash('error', "El código de la asignatura es obligatorio  ");
			}
			else{
			
			 if($r ){ // Valida si el codigo ya fue usado por otra materia
					Yii::app()->user->setFlash('error', "Ya existe una Asignatura con el codigo  ".$r->cod_materia);
					error_log('codigo de materia repetido ');	
			 }else{			
					$cod_p = false; // El codigo padre viene vacio 
			
					if ($model->cod_materia_padre != null){
						$cod_p = true;
						$var = $model->cod_materia_padre;
						
						$x = Materia::model()->find("cod_materia='".$model->cod_materia_padre."'");
						error_log('el codigo padre viene con valor');
						
						
					}
					
					if(!$x && $cod_p == true){ //Viene un codigo y el codigo no existe 
							Yii::app()->user->setFlash('error', "El código de la Asignatura a relacionar no existe.");
			
						}else if ($cod_p && $x) {
							
							if($model->save()){
								error_log('GUARDO LA MATERIA en el update ');
								
								}  // Si el codigo a relacionar viene nulo debe guardar 
								
								error_log('vamos a eliminar  ' .$x->id_materia);
							$borrar =  Yii::app()->db->createCommand("DELETE ".
										"FROM relacion_materia ".
										"WHERE  id_materia_hija = '".$x->id_materia."' ")->execute();
								
								

			if(count($borrar)>0){
					error_log('borro alguna!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! ');
					
			}else 
					error_log('ninguna =( =( =( ');			
								
								
								error_log('agregar hijos');
								$cli = new MiCliente();
								$res = $cli->padres_materia($var);
								error_log('codigo a buscar '.$var);
								
								error_log($res);
								if($res){
									$res_js=json_decode($res);
									foreach( $res_js as $itb){
														
										$sql = Yii::app()->db->createCommand()->insert('relacion_materia',array('id_materia_hija'=>$model->id_materia,'id_materia_padre'=>$itb->id_materia_padre));			
										$sql = Yii::app()->db->createCommand()->insert('relacion_materia',array('id_materia_hija'=>$model->id_materia,'id_materia_padre'=>$itb->id_materia_hija));			
									}
									error_log('SALI del for');
				
								}else {
									$sql = Yii::app()->db->createCommand()->insert('relacion_materia',array('id_materia_hija'=>$model->id_materia,'id_materia_padre'=>$x->id_materia));
									error_log('No trajo informacion');
								}
							//error_log('ahora guardar materia');
							
									
									$this->redirect(array('view','id'=>$model->id_materia));
							} else {
								
								
									if($model->save())  // Si el codigo a relacionar viene nulo debe guardar 
									$this->redirect(array('view','id'=>$model->id_materia));
							}
						
			}// fin del segundo else. El codigo de la materia ya esta siendo usado 	
		}
				
				
				
				
				
				
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}*/
	
	
	
	
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Materia']))
		{
			$model->attributes=$_POST['Materia'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_materia));
				
				
					if ($model->cod_materia_padre != null){
						$cod_p = true;
						$var = $model->cod_materia_padre;
						
						$x = Materia::model()->find("cod_materia='".$model->cod_materia_padre."'");
				//		error_log('el codigo padre viene con valor');
						
						
					}
					
					if(!$x && $cod_p == true){ //Viene un codigo y el codigo no existe 
							Yii::app()->user->setFlash('error', "El código de la Asignatura a relacionar no existe.");
			
						}else if ($cod_p && $x) {
							
							if($model->save()){
					//			error_log('GUARDO LA MATERIA');
								
								}  // Si el codigo a relacionar viene nulo debe guardar 
								error_log('agregar hijos');
								$cli = new MiCliente();
								$res = $cli->padres_materia($var);
						//		error_log('codigo a buscar '.$var);
								
								error_log($res);
								if($res){
									$res_js=json_decode($res);
									foreach( $res_js as $itb){
														
										$sql = Yii::app()->db->createCommand()->insert('relacion_materia',array('id_materia_hija'=>$model->id_materia,'id_materia_padre'=>$itb->id_materia_padre));			
										$sql = Yii::app()->db->createCommand()->insert('relacion_materia',array('id_materia_hija'=>$model->id_materia,'id_materia_padre'=>$itb->id_materia_hija));			
									}
							//		error_log('SALI del for');
				
								}else {
									
									$sql = Yii::app()->db->createCommand()->insert('relacion_materia',array('id_materia_hija'=>$model->id_materia,'id_materia_padre'=>$x->id_materia));
								//	error_log('No trajo informacion');
								}
							//error_log('ahora guardar materia');
							
									
									$this->redirect(array('view','id'=>$model->id_materia));
							} 
				
				
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Materia');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Materia('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Materia']))
			$model->attributes=$_GET['Materia'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Materia the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Materia::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Materia $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='materia-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	
	public function actionActas(){
			$mode1=Materia::model()->findAll();
			$twitter = "@basa90";
			$this->render("historico_asig",array("mode1"=>$mode1,"twitter"=>$twitter));	 
	}
	
	 public function actionLista_materia(){
			$mode1=Materia::model()->findAll();
			$twitter = "@basa90";
			$this->render("historico_asig",array("mode1"=>$mode1,"twitter"=>$twitter));	 
	}

		 
	public function actionLista_Actas_Materia($id_materia){
			
			$cli = new MiCliente();
			
				$res_ob = $cli->actas_materia($id_materia);	
			
			
							$mode1=json_decode($res_ob);						
						
						$twitter = "@basa90";
			$this->render("actas_materias",array("mode1"=>$mode1,"twitter"=>$twitter));
							
	}
	
	
		 public function actionReporte_acta($id_acta){
						       		
			$mPDF1 = Yii::app()->ePdf->mpdf();
			
 $mPDF1->WriteHTML(" <table  border=\"1\">
                
               <tr>
                <td width=13% height=10  align=center rowspan=2><b><i>CONSEJO DE DOCENCIA Y
                <br>DESARROLLO CURRICULAR</br>    <br>FACYT</i></b></br> <br><img  width=40px height=50px src=/gc/themes/tgr/images/uc.png /></br></td>
                <td width=100% height=10 align=center  bgcolor=#F9FFFF><h1><font color=#000033><b><i><caption><big>ACTA</big></caption></i></b></h1></font></td>
            </tr>
            <tr><td width=20% height=10 align=center rowspan=2><b><i> Facultad Experimental de Ciencias y Tecnología
					Consejo de Docencia y Desarrollo Curricular FACYT
				<br align=center>	Fecha: 04/04/2014 </br>					
				<br aling=center>	Hora: 08:45 a.m </br>
				<br>	Lugar:  Salón de Reuniones del Consejo de la Facultad </br></i></b> </td>
            </tr>
            <tr>
                <td align=center bgcolor=#F9FFFF><b><i><br>Tipo de Reunión:</br>
                <br align=center> Ordinaria </br>
				<br align=center> Reunión Nº 01-2012</br></i><b></td>
				</tr>
                
                </table>");    
                
			
			
			$mPDF1->WriteHTML( "<P align=center><b>PUNTOS DISCUTIDOS </b></P> ");
		
		
				$cli = new MiCliente();
			
				$res_ob = $cli->report_materia($id_acta);
		
				if($res_ob){
					
							$res_ob=json_decode($res_ob);						
							foreach( $res_ob as $itb){
							
								
								$mPDF1->WriteHTML( "<td>".$itb->resolucion."</td>");
									
							}
						}
                
			
			 $mPDF1->Output("_reporte".$id,  EYiiPdf::OUTPUT_TO_BROWSER);      
            
          
			
			
	}
	
	
	
	/**
	 * Lists all models.
	 */
	public function actionHistorico()
	{
		$dataProvider=new CActiveDataProvider('Materia');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function  actionlistarhistoricomatria(){
			$mode1=Departamento::model()->findAll();
			$twitter = "@basa90";
			$this->render("historicomatria",array("mode1"=>$mode1,"twitter"=>$twitter));	
		
		
		}


 public function actionGenerarPensum($id_departamento){
			
			
			$mPDF1 = Yii::app()->ePdf->mpdf();
			
			 $mPDF1->WriteHTML(" <table  border=\"0\">
                
            <tr>
                <td width=13% height=10  align=left>
						<img  width=60px height=70px src=/gc/themes/tgr/images/uc.png />
					</br>
				</td>
                <td width=20% height=10 align=center rowspan=2><b><i> Universidad de Carabobo
					<br>Facultad Experimental de Ciencias y Tecnología</br>
					<br align=center> Licenciatura en Computación</br> 
				</td> 
				<td	width=13% height=10  align=right>
					<br>
						<img  width=60px height=70px src=/gc/themes/tgr/images/facytp.png />
					</br>
				</td>
            </tr>
           
                </table>");       
			
			$mPDF1->WriteHTML( "<p align=center>Departamento:  </p> ");
			$mPDF1->WriteHTML(" <h1> <P align=center>Pensum</P>  </h1> \n");
			
			
			error_log('llego a la declaracion ');
				$cli = new MiCliente();
			
			
			error_log('el departamento es  '.$id_departamento);
			
				$res_ob = $cli->historicomat($id_departamento);	
			
			$mPDF1->WriteHTML(" <table  style= 'margin-left: 300px;' border='1'><tr> <td align='center'><b>Código</b></td><td align='center'><b>Asignatura</b></td><td align='center'><b>Código(s) de la unidad(es) curricular(es) precedente(s) y periodo de inserción en el plan de estudio</b></td></tr>");
			
				if($res_ob)
				{
					$res_ob=json_decode($res_ob);						
					$var = 0;
					$idmateria = 0;
					$primero = true; 
					foreach( $res_ob as $itb)
					{
						//error_log($itb->nombre_mat." ".$itb->nivel);
						
					
						
					if ($var != $itb->nivel){
						if($cod_print!=''){
						$mPDF1->WriteHTML( "<tr>
												<td>".$cod_print."</td>
												<td>".$mat_print."</td>
												<td>".$hija_print."</td></tr>");
							$cod_print = '';
							$mat_print = '';
							$hija_print = '';
							$cod = '';
						
					}
						$mPDF1->WriteHTML( "<tr><td colspan='3'  align='center'><b>".Niveles::Model()->FindByPk($itb->nivel)->descripcion."</b></td></tr>");	
						$var = $itb->nivel;	
					}	
					error_log("Vamos con materia: ".$itb->nombre_mat);
						if($primero){
						$cod = $itb->cod_materia;
						$primero = false;
						}
						
						if($itb->cod_materia==$cod){
								$cod_print = $itb->cod_materia;
								$mat_print = $itb->nombre_mat;
								
								if($itb->id_materia_hija!='0')
								$hija_print .= ' - '. Materia::Model()->FindByPk($itb->id_materia_hija)->cod_materia;
							
								$cod = $itb->cod_materia;
						}else{
							error_log("Imprimir materia: ".$mat_print." Nivel: ".$var );
							$mPDF1->WriteHTML( "<tr>
												<td>".$cod_print."</td>
												<td>".$mat_print."</td>
												<td>".$hija_print."</td></tr>");
							
							$cod_print = '';
							$mat_print = '';
							$hija_print = '';
							$cod = '';
							
							$cod_print = $itb->cod_materia;
							$mat_print = $itb->nombre_mat;	
							if($itb->id_materia_hija!='0')
							$hija_print .= ' - '.Materia::Model()->FindByPk($itb->id_materia_hija)->cod_materia;
							
							$cod = $itb->cod_materia;
							
							}
						
					}
					$mPDF1->WriteHTML( "<tr>
												<td>".$cod_print."</td>
												<td>".$mat_print."</td>
												<td>".$hija_print."</td></tr>");
				}
				
				$mPDF1->WriteHTML("</table>");
			
			 $mPDF1->Output("_reporte".$id,  EYiiPdf::OUTPUT_TO_BROWSER);          
		}


	
}
