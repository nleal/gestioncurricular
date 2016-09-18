<?php

class MiCliente extends CApplicationComponent
{
	
    private $client = null;
    public $ws_url;

    private function getClienteInt(){
    
        if($this->client == null)
        {
            // para que reconozca nuevas funciones del WS que vayas creando
            
            ini_set ( 'soap.wsdl_cache_enable' , 1);
			ini_set ( 'soap.wsdl_cache_ttl' , 3600 );
			error_log('Llene el cliente ');
            $this->client = new SoapClient('http://127.0.0.1/gestioncurricular/index.php/site/ws');
			error_log('salio el cliente ');
			
        }else error_log('Cliente no NULL ');
        return $this->client;
    }
    
    
    public function obtenerMensajeRemoto($argX) {
        return $this->getClienteInt()->getObtenerMensajeRemoto($argX);
    }
    
    public function existeLogin($uname){
		error_log('Username: '.$uname);
		return $this->getClienteInt()->getExisteLogin($uname);
	}
    public function existeMateria($uname){
		error_log('Username: '.$uname);
		return $this->getClienteInt()->getExisteMateria($uname);
	}
    public function existePensum($uname){
		error_log('Username: '.$uname);
		return $this->getClienteInt()->getExistePensum($uname);
	}
	
    public function existeObjetivo($uname){
		error_log('Objetivo: '.$uname);
		return $this->getClienteInt()->getExisteO($uname);
	}
    
    public function existeTema($uname){
		error_log('Username: '.$uname);
		return $this->getClienteInt()->getExisteTemario($uname);
	}
	
	public function pensum($uname){
		error_log('Username: '.$uname);
		return $this->getClienteInt()->getExistePensum2($uname);
	}
	
	public function historico($uname){
		error_log('Username: '.$uname);
		return $this->getClienteInt()->getConsultaHistorico($uname);
	}
	
	public function actas_materia($uname){
		error_log('Username: '.$uname);
		return $this->getClienteInt()->getActas_Materia($uname);
	}
	
	public function report_materia($uname){
		error_log('Username: '.$uname);
		return $this->getClienteInt()->getResport_Actas($uname);
	}
	
	public function consulta_pensum(){
		error_log('h');
		return $this->getClienteInt()->getConsulta_pensum();
	}
	
	public function inactivos_pensum($uname){
		error_log('Username: '.$uname);
		return $this->getClienteInt()->getViejos($uname);
	}
	public function materias_programa($uname){
		error_log('Username: '.$uname);
		return $this->getClienteInt()->getMaterias_programa($uname);
	}
	
	public function agendas(){
		error_log('Username: ');
		return $this->getClienteInt()->getListaAgendas();
	}
	public function padres_materia($uname){
		
		return $this->getClienteInt()->getPadresMateria($uname);
	}
	
	public function programavigente($argX) {
        return $this->getClienteInt()->getProgramavigente($argX);
    }
    
} 
