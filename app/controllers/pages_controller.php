<?php

class PagesController extends AppController {

	var $name = 'Pages';
	function beforeFilter(){
			parent::beforeFilter();
			//$this->Auth->allow('*');
			//debug($this->Auth); 
	}
		

	function view($s = null) {
		
		if (!$s) {
			$this->Session->setFlash(__('Página inválida', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('page', $this->Page->findBySlug($s));
		$this->set("homeID",$s);
		$this->layout="home";

	}
	function bannerPromocional(){
		$banner=$this->Page->findByTitle("banner");
		return $banner["Page"]["content"];
	}

	function home(){
		$this->layout="home";
	}
	
	function conozcanos(){
		
	}
	
	function admin_index() {
		$this->layout="admin";
		$this->Page->recursive = 0;
		$this->set('pages', $this->paginate());
	}

	function admin_view($id = null) {
		$this->layout="admin";
		if (!$id) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('page', $this->Page->read(null, $id));
	}

	function admin_add() {
		$this->layout="admin";
		if (!empty($this->data)) {
			$this->Page->create();
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(__('La página ha sido guardada', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La página no puede ser guardada. Por favor, inténtelo de nuevo.', true));
			}
		}
	}

	function admin_edit($id = null) {
		$this->layout="admin";
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data["Page"]["content"]=$_POST["editor"];
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(__('La página se ha actualizado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo actualizar la página. Por favor, inténtelo de nuevo.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Page->read(null, $id);
		}
	}
	function contacto(){
		if(!empty($this->data)){
				$asunto    = 'Contacto Página Web';
				$mensaje= "nombre: ".$this->data["Page"]["nombre_contacto"]. "<br />";
				$mensaje.= "email: ".$this->data["Page"]["email"]. "<br />";
				$mensaje.= "telefono: ".$this->data["Page"]["telefono"]. "<br />";
				$mensaje.= "comentarios: ".$this->data["Page"]["comentario"]."<br />";
				
				$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
				$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$para="ricardopandales@gmail.com";
				$cabeceras .= 'From: Priceshoes <info@priceshoes.com.co>' . "\r\n";
				if(mail($para, $asunto, $mensaje, $cabeceras)){
					$this->Session->setFlash(__('Su solicitud fue enviada, muchas gracias por contactarnos.', true));
				}else {
					$this->Session->setFlash(__('No se pudo enviar su mensaje. Por favor, inténtelo de nuevo.', true));
				}
		}		
	}
	function registro(){
		
	}
	function crear_usuario(){
		
	}
	
	/*function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Page->delete($id)) {
			$this->Session->setFlash(__('Page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Page was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}*/
}
?>