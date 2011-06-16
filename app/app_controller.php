<?php
class AppController extends Controller {
	
	var $components = array("Session", "Auth");
	var $uses = array("Page");
	var $helpers = array("Form", "Session", "Html");
	function beforeFilter(){
		
		$this->Auth->allow('*');
		
		if(isset($this->params["prefix"])&&$this->params["prefix"]=="admin") {
			$this->layout="admin";
		}
		
		$this->Auth->loginAction = array('controller'=>'users','action'=>'login');
		$this->Auth->loginRedirect  = array('controller'=>'pages','action'=>'index');
		
		// Location
		//
		$model = $this->uses[0];
		if($this->Session->read("locale") == "es_es"){
			$this->$model->locale = "es_es";
		} else {
			$this->$model->locale = "en_us";
		}		
	}
	
}