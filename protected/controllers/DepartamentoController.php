<?php


Yii::import('application.vendor.mpdf.*');
require_once('mpdf.php');


class DepartamentoController extends Controller
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
				'actions'=>array('index','view','ver','mostrar','mostrar2','historico_materia','computacion','generarpdf','pensum','generarpensum'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','ver','mostrar','mostrar2','historico_materia' ,'computacion','generarpdf','pensum','generarpensum'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete', 'ver'),
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
		$model=new Departamento;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Departamento']))
		{
			$model->attributes=$_POST['Departamento'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_departamento));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Departamento']))
		{
			$model->attributes=$_POST['Departamento'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_departamento));
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
		$dataProvider=new CActiveDataProvider('Departamento');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Departamento('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Departamento']))
			$model->attributes=$_GET['Departamento'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Departamento the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Departamento::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	 public function actionVer(){
			$mode1=Departamento::model()->findAll();
			$twitter = "@basa90";
			$this->render("ver",array("mode1"=>$mode1,"twitter"=>$twitter));	 
		 }
	
	 public function actionHistorico_materia(){
			$mode1=Materia::model()->findAll();
			$twitter = "@basa90";
			$this->render("historico_materia",array("mode1"=>$mode1,"twitter"=>$twitter));	 
		 }

	 public function actionPensum(){
			$mode1=Departamento::model()->findAll();
			$twitter = "@basa90";
			$this->render("consultap",array("mode1"=>$mode1,"twitter"=>$twitter));	 
		 }

	 public function actionHistorico(){
			$mode1=Materia::model()->findAll();
			$twitter = "@basa90";
			$this->render("historico_asig",array("mode1"=>$mode1,"twitter"=>$twitter));	 
		 }


	/**
	 * Performs the AJAX validation.
	 * @param Departamento $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='departamento-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	
	/**
	 * Lists all models.
	 */
	public function actionComputacion()
	{
		$mode1=Materia::model()->findAll();
			$twitter = "@basa90";
			$this->render("computacion",array("mode1"=>$mode1,"twitter"=>$twitter));	 
	}
		
		public function actionMostrar(){
				$resultado = $_GET['id_departamento'];
				$div ='';

			$div .= '<table class="normal"><tr> <th>Materia</th><th>Programa</th>';
			$div .= '</tr>';				
		
		
				error_log('alertas: '.$resultado);
				
				$cli = new MiCliente();
			
			//Servicio de consulta materias 
				$res_js = $cli->existePensum($resultado);
				error_log('Countmateria: '.count($res_js)); 
				
				if($res_js){
						$res_js=json_decode($res_js);
						
					foreach( $res_js as $it){
								$o = $it->id_materia;
								
								$res_ob = $cli->existeObjetivo($o);
								$div .= '<tr><td>-'.$it->nombre_mat.'';
								//$div .= '</tr>';
							//	$div .= 'Materia: '.$it->nombre_mat.'<br />';
								if($res_ob){
									$res_ob=json_decode($res_ob);
							//		$div .= 'Programa '.'<br />';
							$div .= '</td>';
							$div .= '<td>';
								foreach( $res_ob as $itb){
								
									$div .= '-'.$itb->nombre_obj.'';
									//$div .= '</tr>';
							//		$div .= '- '.$itb->nombre_obj.'<br />';
								
								}
								$div .= '</td>';
							}//else {
								//$div .= '<td>';
								//$div .= '</td>';
								
							//	}
							
					}
				}else $div = '**No posee pensum**';
				
				$return['message'] = $div;
				echo json_encode($return);	 
		}
		
		public function actionMostrar2(){
				$resultado = $_GET['id_materia'];
				$div ='';
			
	  
	  $div .= '<table class="normal"><tr> <th>Materia</th><th>Fecha de inicio</th><th>Fecha de inactividad</th>';
	  $div .= '</tr>';
				
				error_log('alertas: '.$resultado);
				
				$cli = new MiCliente();
			
					$res_ob = $cli->existeObjetivo($resultado);			
					if($res_ob){
							$res_ob=json_decode($res_ob);						
							foreach( $res_ob as $itb){
								
									$div .= '<tr><td>-'.$itb->nombre_obj.'</td><td>'.$itb->fecha_comienzo.'</td><td>'.$itb->fecha_f.'</td>';
									$div .= '</tr>';
							}
					}else $div = '**No posee Historico**';
				
				$return['message'] = $div;
				echo json_encode($return);	 
		}
		
		
        
        public function actionGenerarPdf($id_materia, $nombre_mat){
			
			
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
                
			$mPDF1->WriteHTML( "<P align=center>".$nombre_mat." </P> ");
			$mPDF1->WriteHTML(" <h1> <P align=center>Programa</P>  </h1> \n");
			$mPDF1->WriteHTML(" <h2> <P>Objetivos:</P>  </h2> \n");
						
				$cli = new MiCliente();
			
				$res_ob = $cli->existePensum($id_materia);	
			
				$mPDF1->WriteHTML( "<ul>");
				if($res_ob){
							$res_ob=json_decode($res_ob);						
							foreach( $res_ob as $itb){							
								$mPDF1->WriteHTML( "<td><li>".$itb->descripcion."</li></td>");
								
							}
						}

$mPDF1->WriteHTML( "</ul>");
			$mPDF1->WriteHTML(" <h2> <P>Contenido:</P>  </h2> \n");		


			$mPDF1->WriteHTML(" <h2> <P>Tema</P>  </h2> \n");

			$tem = new MiCliente();						
				
			$res_te = $tem->existeTema($id_materia);
			
							if($res_te){
							$res_te=json_decode($res_te);						
							foreach( $res_te as $itb){								
								$mPDF1->WriteHTML( "<td><li>".$itb->descripcion."</li></td>");
							}
						}				
			
			 $mPDF1->Output("_reporte".$id,  EYiiPdf::OUTPUT_TO_BROWSER);      
            
             
		}
		
		
        public function actionGenerarPensum($id_departamento, $nombre){
			
			
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
			
			$mPDF1->WriteHTML( "<P align=center>Departamento: ".$nombre." </P> ");
			$mPDF1->WriteHTML(" <h1> <P align=center>Pensum</P>  </h1> \n");
			
			
			
				$cli = new MiCliente();
			
				$res_ob = $cli->pensum($id_departamento);	
			
			$mPDF1->WriteHTML(" <table border=\"1\"><tr> <td>Codigo</td><td>Materia</td><td>Semestre</td></tr>");
			
				if($res_ob)
				{
					$res_ob=json_decode($res_ob);						
					foreach( $res_ob as $itb)
					{
						$mPDF1->WriteHTML( "<tr>
												<td>".$itb->cod_materia."</td>
												<td>".$itb->nombre_mat."</td><td>".$itb->semestre."</td> 
											</tr>");			
					}
				}
				
				$mPDF1->WriteHTML("</table>");
				
			 $mPDF1->Output("_reporte".$id,  EYiiPdf::OUTPUT_TO_BROWSER);          
		}
}
