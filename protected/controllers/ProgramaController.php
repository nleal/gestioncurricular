<?php

class ProgramaController extends Controller
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
				'actions'=>array('index','view','listadepartamento','mostrar'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','listadepartamento','mostrar'),
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
		$model=new Programa;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Programa']))
		{
			$model->attributes=$_POST['Programa'];
			$tempSave=CUploadedFile::getInstance($model, 'file');
			
			$id=rand(10,99);
			
			$model->file = $tempSave.'_'.$id.'.pdf';
			
			//foreach ($_REQUEST['1'] as $checkboxes => $CB){
				
			//$model->file = 'id_materia'=>$CB;
			 
			//}
			
			
			
				$model->id_materia = $_REQUEST['materia_selec'];
			
			
			$res='true';
        $var = $model->id_materia ;
        $cli = new MiCliente();
        $res = $cli->programavigente($var);
			
			if($res=='true' || $model->status==2){
				error_log('entro al if del programa'); 
			if($model->save())
				$tempSave->saveAs(Yii::app()->basePath.'/../uploads/' . $tempSave.'_'.$id.'.pdf');
				$this->redirect(array('view','id'=>$model->id_programa));
				
			}else{
			Yii::app()->user->setFlash('error', "Ya existe un Programa vigente para esta materia");

                error_log('Existe uno con viegente ');
            }	
				
				
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

		if(isset($_POST['Programa']))
		{
			$model->attributes=$_POST['Programa'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_programa));
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
		$dataProvider=new CActiveDataProvider('Programa');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Programa('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Programa']))
			$model->attributes=$_GET['Programa'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Programa the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Programa::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Programa $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='programa-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	
	 public function actionListaDepartamento(){
			$mode1=Departamento::model()->findAll();
			$twitter = "@basa90";
			$this->render("listardepartamento",array("mode1"=>$mode1,"twitter"=>$twitter));	 
		 }
		 
		 
		 public function actionMostrar(){
			 error_log('ESTOY EN MOSTRAAAAARRRR');
			 
			 
			 $resultado = $_GET['id_departamento'];
				$div ='';
			
	  
			$div .= '<table class="normal"><tr> <th>Departamento</th><th>Asignatura</th><th>Código</th><th> Descargar </th>';
			$div .= '</tr>';	
				
				error_log('alertaaaaaaaaaas: '.$resultado);
				
				$cli = new MiCliente();
			
					$res = $cli->materias_programa($resultado);	
					
					error_log('Countmateriaaaaaaaaaaaaaaaaaaa: '.count($res)); 
							
					if($res){
						
								$res_js=json_decode($res);
						
						foreach( $res_js as $it){
																
								$div .= '<tr><td>-'.$it->nombre.'';
								$div .= '</td>';
								$div .= '<td>-'.$it->nombre_mat.'';
								$div .= '</td>';
								$div .= '<td>-'.$it->cod_materia.'';
								$div .= '</td>';
							//$div .= '<td>Ver</td></tr>';
							$div .= '<td><a href='.Yii::app()->request->baseUrl.'/uploads/'.$it->file.'><img  width=20px height=20px src=/gc/themes/tgr/images/pdf.gif /></a></td></tr>';
							//$div .= '<td><a href="#" title="Ver">'Yii::app()->request->baseUrl."/uploads/".$it->file.'</a></td></tr>';
						//	$div .= '<td><a href="#" title="'. $data3->definicion_caracteristica.'">'.$data3->nombre_caracteristica.'MONSE'.'</a></td>';
		
							
							
						}
							$div .='</table>';
							
					}else $div = '**No posee Asignaturas**';
					
					
					
				
				$return['message'] = $div;
				echo json_encode($return);
		}
		
}
