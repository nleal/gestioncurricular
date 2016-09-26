<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
			
			'ws'=>array(
				'class'=>'CWebServiceAction',
			
			),
			
			
		);
	}
	

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;

		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	
	/**
	* @param string argX
	* @return string 
	* @soap
	*/
	    public function getObtenerMensajeRemoto($argX)
	    {
	        error_log('entre a validacion ');
            $x = ' ';
            
            $evaluacion = Yii::app()->db->createCommand(" SELECT * ".
                        "FROM pensumhistorico a ".
                        "WHERE  status = 1 and id_departamento = ".$argX."")->queryAll();

            if(count($evaluacion)>0){
                error_log('si hay vigente ');
                
                    $x = 'false';
                    return $x;
            }else{
                    error_log('no existe ninguno  vigente');
                    $x= 'true';
                    return $x;
                }  
	    }
	    
	/**
	* @param string uname
	* @return string 
	* @soap
	*/
	    public function getExisteLogin($uname)
	    {
			
			$evaluacion = Yii::app()->db->createCommand("SELECT id_usuario, usuario ".
			"FROM usuario ".
			"WHERE usuario ='".$uname."'")->queryAll();
			if($evaluacion)
				$result ='SI';
			else $result ='NO';
			
	        return 'EL usuario esta? '.$result;
	    }
	    
	    
	/**
	* @param string uname
	* @return string 
	* @soap
	*/
	    public function getExisteMateria($uname)
	    {
			
			$evaluacion = Yii::app()->db->createCommand("SELECT nombre_mat, descripcion, fecha_comienzo, fecha_fin, status, id_departamento, id_materia ".
			"FROM materia ".
			"WHERE nombre_mat ='".$uname."'")->queryAll();
			if($evaluacion)
				$result ='SI';
			else $result ='NO';
			
	        return 'La materia exsite? '.$result;
	    }
	    
	    
	/**
	* @param string id
	* @return string 
	* @soap
	*/
	    public function getExistePensum($id){
			
			$evaluacion = Yii::app()->db->createCommand(" SELECT descripcion , id_obj ".
						"FROM objetivo ".
						"WHERE id_materia ='".$id."'")->queryAll();

			if(count($evaluacion)>0){
					foreach($evaluacion as $it){
						$res_js[] = array("descripcion"=>$it['descripcion'],"id_obj"=>$it['id_obj']); 
					}
					
					return json_encode($res_js);
			}else return null;
						
	    }

	/**
	* @param string id
	* @return string 
	* @soap
	*/    
	    public function getExistePensum2($id){
			
			$evaluacion = Yii::app()->db->createCommand("SELECT a.semestre, b.cod_materia, a.id_materia as idma, a.id_departamento, nombre_mat ".
														"FROM pensum as a ".
														"inner join materia as b on a.id_materia = b.id_materia ".
														"WHERE a.id_departamento= '".$id."'")->queryAll();


			if(count($evaluacion)>0){
					foreach($evaluacion as $it){
						$res_js[] = array("idma"=>$it['idma'],"nombre_mat"=>$it['nombre_mat'],"semestre"=>$it['semestre'],"cod_materia"=>$it['cod_materia']); 
					}
					
					return json_encode($res_js);
			}else return null;
						
	    }


	/**
	* @param string id
	* @return string 
	* @soap
	*/    
	    public function getConsultaHistorico($id){
			
			$evaluacion = Yii::app()->db->createCommand("SELECT a.id_materia as idma, a.id_departamento, nombre_mat ".
														"FROM pensum as a ".
														"inner join materia as b on a.id_materia = b.id_materia ".
														"WHERE a.id_departamento= '".$id."'")->queryAll();


			if(count($evaluacion)>0){
					foreach($evaluacion as $it){
						$res_js[] = array("idma"=>$it['idma'],"nombre_mat"=>$it['nombre_mat']); 
					}
					
					return json_encode($res_js);
			}else return null;
						
	    }
	    
	    
	/**
	* @param string id
	* @return string 
	* @soap
	*/
	    public function getExisteTemario($id){
			
			$evaluacion = Yii::app()->db->createCommand(" SELECT descripcion , id_tema ".
						"FROM tema ".
						"WHERE id_materia ='".$id."'")->queryAll();

			if(count($evaluacion)>0){
					foreach($evaluacion as $it){
						$res_js[] = array("descripcion"=>$it['descripcion'],"id_tema"=>$it['id_tema']); 
					}
					
					return json_encode($res_js);
			}else return null;
			
			
			
	    }

	    
	/**
	* @param string uname
	* @return string 
	* @soap
	*/
	
	public function getHistoricomat($uname){
		
		
		error_log('mega consulta ');
		$evaluacion = Yii::app()->db->createCommand(" SELECT n.nivel,  m.cod_materia , r.id_materia_padre , m.nombre_mat , e.descripcion ".
								"FROM mat_dep_nivel n ".
								"inner join materia m on m.id_departamento = n.id_departamento ".
								"inner join relacion_materia  r on m.id_materia= r.id_materia_hija ".
								"inner join niveles e on e.nivel = n.nivel ".
								"WHERE n.id_departamento = '".$uname."' and m.status ='S' ORDER by n.nivel ,  m.id_materia" )->queryAll();
		
		
			if(count($evaluacion)>0){
					foreach($evaluacion as $it){
						$res_js[] = array("descripcion"=>$it['descripcion'],"nivel"=>$it['nivel'],"cod_materia"=>$it['cod_materia'] ,"id_materia_padre"=>$it['id_materia_padre'],"nombre_mat"=>$it['nombre_mat']); 
					}
					
					return json_encode($res_js);
			}else return null;
			
			
			
			/*SELECT *
FROM mat_dep_nivel n
inner join materia m on m.id_departamento = n.id_departamento
inner join relacion_materia  r on m.id_materia= r.id_materia_hija 
WHERE id_departamento = 2
			*/
		
		
				}
	    
	    
	/**
	* @param int uname
	* @return string 
	* @soap
	*/
	  public function getExisteO($uname){
		  error_log('llegue'.$uname);
	    $evaluacion = Yii::app()->db->createCommand("SELECT  m.nombre_mat nombre_mat, m.id_materia id_materia, nombre_obj , fecha_comienzo, o.fecha_fin fecha_f ".
			"FROM objetivos o ".
			"JOIN materia as m on o.id_materia = m.id_materia ".
			"WHERE m.id_materia = ".$uname)->queryAll();
		
	if(count($evaluacion)>0){
	foreach($evaluacion as $it){
		
		$res_js[] = array("nombre_mat"=>$it['nombre_mat'],"id_materia"=>$it['id_materia'],"nombre_obj"=>$it['nombre_obj'],"fecha_comienzo"=>$it['fecha_comienzo'],"fecha_f"=>$it['fecha_f']); 
		
		}
		return json_encode($res_js);
	}else return null;
	
	//return 1;
	}
	
	   
	/**
	* @param int uname
	* @return string 
	* @soap
	*/
	public function getActas_Materia($id){
		$evaluacion = Yii::app()->db->createCommand("SELECT a.id_materia , resolucion, reunion, b.id_acta ".
			"FROM resolucion a ".
			"JOIN acta as b on b.id_acta = a.id_acta ".
			"WHERE a.id_materia = '".$id."' ".
			"group by b.id_acta" )->queryAll();
		
	if(count($evaluacion)>0){
	foreach($evaluacion as $it){
		
		$res_js[] = array("id_acta"=>$it['id_acta'],"resolucion"=>$it['resolucion'], "reunion"=>$it['reunion']); 
		
		}
		return json_encode($res_js);
	}else return null;
	
	}    
	    
	    
	    /**
	* @param int uname
	* @return string 
	* @soap
	*/
	public function getResport_Actas($id){
		$evaluacion = Yii::app()->db->createCommand("SELECT a.id_materia , resolucion, reunion, b.id_acta ".
			"FROM resolucion a ".
			"JOIN acta as b on b.id_acta = a.id_acta ".
			"WHERE a.id_acta = '".$id."' ")->queryAll();
			
	if(count($evaluacion)>0){
	foreach($evaluacion as $it){
		
		$res_js[] = array("id_acta"=>$it['id_acta'],"resolucion"=>$it['resolucion'], "reunion"=>$it['reunion']); 
		
	}
		return json_encode($res_js);
	}else return null;
	
	}    
   
   
	/**
	* @param string id
	* @return string 
	* @soap
	*/    
	    public function getConsulta_pensum(){
			
			$evaluacion = Yii::app()->db->createCommand("SELECT a.id_departamento , b.nombre, a.file ".
														"FROM pensumhistorico as a ".
														"inner join departamento as b on a.id_departamento = b.id_departamento ".
														"WHERE a.status='1'")->queryAll();


			if(count($evaluacion)>0){
					foreach($evaluacion as $it){
						$res_js[] = array("id_departamento"=>$it['id_departamento'],"nombre"=>$it['nombre'],"file"=>$it['file']); 
					}
					
					return json_encode($res_js);
			}else return null;
						
	    }

   
	/**
	* @param string id
	* @return string 
	* @soap
	*/    
	    public function getInactivos($uname){
			
			$evaluacion = Yii::app()->db->createCommand("SELECT a.id_departamento , b.nombre, a.file , a.fecha ".
														"FROM pensumhistorico as a ".
														"inner join departamento as b on a.id_departamento = b.id_departamento ".
														"WHERE a.status='2' and b.id_departameto = '".$uname."' ")->queryAll();


			if(count($evaluacion)>0){
					foreach($evaluacion as $it){
						$res_js[] = array("id_departamento"=>$it['id_departamento'],"nombre"=>$it['nombre'],"file"=>$it['file'],"fecha"=>$it['fecha']); 
					}
					
					return json_encode($res_js);
			}else return null;
						
	    }

   	    
	/**
	* @param string id
	* @return string 
	* @soap
	*/    
	    public function getViejos($uname){
			
			$evaluacion = Yii::app()->db->createCommand("SELECT a.id_departamento , b.nombre, a.file , a.fecha ".
														"FROM pensumhistorico as a ".
														"inner join departamento as b on a.id_departamento = b.id_departamento ".
														"WHERE a.status='2' and b.id_departamento = '".$uname."' ")->queryAll();


			if(count($evaluacion)>0){
					foreach($evaluacion as $it){
						$res_js[] = array("id_departamento"=>$it['id_departamento'],"nombre"=>$it['nombre'],"file"=>$it['file'], "fecha"=>$it['fecha']); 
					}
					
					return json_encode($res_js);
			}else return null;
						
	    }
	    
	    
	/**
	* @param string id
	* @return string 
	* @soap
	*/
	    public function getMaterias_programa($uname){
			
			
			error_log('como llego en el ser:progra '.$uname);
			
			$evaluacion = Yii::app()->db->createCommand(" SELECT nombre_mat , m.id_materia , p.file , m.cod_materia, d.nombre ".
						"FROM materia m ".
						"INNER JOIN departamento d on d.id_departamento = m.id_departamento  ".
						"INNER JOIN programa p on p.id_materia = m.id_materia  ".
						"WHERE d.id_departamento = '".$uname."'order by nombre_mat")->queryAll();

			if(count($evaluacion)>0){
				error_log('entre al if');
					foreach($evaluacion as $it){
						$res_js[] = array("nombre_mat"=>$it['nombre_mat'],"id_materia"=>$it['id_materia'] ,"file"=>$it['file'],"cod_materia"=>$it['cod_materia'],"nombre"=>$it['nombre']); 
					}
					
					return json_encode($res_js);
			}else{
			error_log('nooooooooooooooooo');
			 return null;
				}	
	    }
	    
	    
	    
	    
	/**
	* @param 
	* @return string 
	* @soap
	*/
	    public function getListaAgendas(){
			
			
			error_log('como llego en el ser: ');
			
			$evaluacion = Yii::app()->db->createCommand(" SELECT id_agenda,fecha_cierre , file ".
						"FROM agenda a  ")->queryAll();

			if(count($evaluacion)>0){
				error_log('entre al if');
					foreach($evaluacion as $it){
						$res_js[] = array("id_agenda"=>$it['id_agenda'],"fecha_cierre"=>$it['fecha_cierre'] ,"file"=>$it['file']); 
					}
					
					return json_encode($res_js);
			}else{
			error_log('nooooooooooooooooo');
			 return null;
				}	
	    }
	    
	    	    /**
	* @param string id
	* @return string 
	* @soap
	*/    
	    public function getPadresMateria($id){
			
			error_log('Llegue al servicio de relacion materia');
									
									
									
			
			/*$uname = Yii::app()->db->createCommand("SELECT id_materia_hija , id_materia_padre  ".
														"FROM relacion_materia  ".
														"inner join materia  on id_materia = id_materia_hija ".
														"WHERE cod_materia= '".$id."'");
														
			*/														
														
			$evaluacion = Yii::app()->db->createCommand("SELECT id_materia_hija , id_materia_padre  ".
														"FROM relacion_materia  ".
														"inner join materia  on id_materia = id_materia_hija ".
														"WHERE cod_materia= '".$id."'")->queryAll();


			if(count($evaluacion)>0){
				error_log('si hay');
					foreach($evaluacion as $it){
						$res_js[] = array("id_materia_hija"=>$it['id_materia_hija'],"id_materia_padre"=>$it['id_materia_padre']); 
					}
					
					return json_encode($res_js);
			}else{
				error_log('nada');
				return null;
			}	
	    }  


		
	/**
	* @param string argX
	* @return string 
	* @soap
	*/
	    public function getProgramavigente($argX)
	    {
	        error_log('entre a validacion progrma  ');
			$x = ' ';
			
			$evaluacion = Yii::app()->db->createCommand(" SELECT * ".
						"FROM programa a ".
						"WHERE  status = 1 and id_materia = ".$argX."")->queryAll();

			if(count($evaluacion)>0){
				error_log('si hay vigente ');
				
					$x = 'false';
					return $x;
			}else{
					error_log('no existe ninguno  vigente');
					$x= 'true';
					return $x;
				}	
	    }
	
	/**
	* @param string argX
	* @return string 
	* @soap
	*/   
	public function getVerificarTapi(){
		error_log("SI entre");
		}    
}
