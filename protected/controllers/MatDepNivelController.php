<?php

class MatDepNivelController extends Controller
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
				'actions'=>array('index','view','Materiaselecionar'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','Materiaselecionar'),
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
		$model=new MatDepNivel;
		
        $departamentoListData = CHtml::listData(Departamento::model()->findAll(), 'id_departamento', 'nombre');


		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['MatDepNivel']))
		{
			$model->attributes=$_POST['MatDepNivel'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_mat_dep_nivel));
		}

		/*$this->render('create',array(
			'model'=>$model,
		));
		*/
		
		$this->render('create',array(
            'model'=>$model,
            'departamentoListData'=>$departamentoListData
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

		if(isset($_POST['MatDepNivel']))
		{
			$model->attributes=$_POST['MatDepNivel'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_mat_dep_nivel));
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
		$dataProvider=new CActiveDataProvider('MatDepNivel');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new MatDepNivel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['MatDepNivel']))
			$model->attributes=$_GET['MatDepNivel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return MatDepNivel the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=MatDepNivel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param MatDepNivel $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='mat-dep-nivel-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	


	public function actionMateriaselecionar() {
		error_log('GHHHHHHH');
		error_log('tapiiiiiii');
		/*
		$cosa = '' ; 
		
		
		if ($cosa)
           error_log('nata');
           else 
           error_log('basa');
          */ 
		
		 $id= $_POST['MatDepNivel']['id_departamento']; 
        //$id =  $_POST ['Departamento']['id_departamento'];
           
           $cosa = Materia::model()->findAll(
		 array(
                      'condition' => 'id_departamento = :id_departamento',
                      'params'    => array(':id_departamento' => $id)
                  )
              );
         
        foreach ($cosa as $valor) {
            error_log($valor['nombre_mat']);
        }  
           
           if ($cosa)
           error_log('nata');
           else 
           error_log('basa');
           
           error_log('ppppppppppppppppppppppppppppppppp'.$id);
           error_log('paso0');
           
           $lista = CHtml::listData(Materia::model()->findAll('id_departamento =:id_departamento', array(':id_departamento'=>$id)), 'id_materia', 'nombre_mat');
           
           
         /*$lista = CHtml::listData(Materia::model()->findAll(array('condition' => 'id_departamento = :id_departamento',
                      'params'    => array(':id_departamento' => $id)
                  )
              ));
           */      
         echo CHtml::tag('option', array('value'=>''), '-- Seleccione Municipio --', true);
		
        foreach ($lista as $valor=>$nombre_mat) {
            echo CHtml::tag('option', array('value'=>$valor), CHtml::encode($nombre_mat), true);
        }
    }

	

	
	
	
	
	
}
