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
				'actions'=>array('index','view','lista_materia','lista_actas_materia','reporte_acta'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','lista_materia','lista_actas_materia', 'reporte_acta'),
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Materia']))
		{
			$model->attributes=$_POST['Materia'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_materia));
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

		if(isset($_POST['Materia']))
		{
			$model->attributes=$_POST['Materia'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_materia));
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

	
}
