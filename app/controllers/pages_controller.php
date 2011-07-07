<?php
class PagesController extends AppController {

	var $name = 'Pages';
	
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow(
			'menu', 'location', 'view', 'bannerPromocional',
			'home', 'conozcanos', 'contacto', 'reOrder'
		);
	}
	
	function menu(){
		return $this->Page->find("list",array("fields"=>array("slug","title")));
	}
	
	function location($location){
		$this->Session->write("menu",$menu);
		$this->Session->write("locale",$location);
		$this->redirect($this->referer());
  	}
	
 	function admin_location($location){
		$this->Session->write("locale",$location);
		$this->redirect($this->referer());
  	}
	 	
	function view($s = null) {
		if (!$s) {
			$this->Session->setFlash(__('Página inválida', true));
			$this->redirect(array('action' => 'index'));
		} else {
			$this->set('page', $this->Page->findBySlug($s));
			//$this->set('page', $this->Page->find('first', array('conditions' => array('Page.slug' => $s))));
			$this->set("homeID", $s);
		}
	}
	
	function bannerPromocional(){
		$banner=$this->Page->findByTitle("banner");
		return $banner["Page"]["content"];
	}

	function home(){
		
	}
	
	function conozcanos(){
		
	}
	
	function admin_index() {
		$this->Page->recursive = 1;
		$this->Page->find("all",array ('recursive'=>1));
		$this->set('pages', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('page', $this->Page->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Page->create();
			//debug($this->data);
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(__('La página ha sido guardada', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La página no puede ser guardada. Por favor, inténtelo de nuevo.', true));
			}
		}
	}

	function admin_edit($id = null) {
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
			$asunto    = $this->data["Page"]["asunto"];
			$mensaje= "nombre: ".$this->data["Page"]["nombre_contacto"]. "<br />";
			$mensaje.= "email: ".$this->data["Page"]["email"]. "<br />";

			$mensaje.= "mensaje: ".$this->data["Page"]["comentario"]."<br />";
			
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$para="ricardopandales@gmail.com,pabloandres623@hotmail.com";
			$cabeceras .= 'From: Priceshoes <info@priceshoes.com.co>' . "\r\n";
			if(mail($para, $asunto, $mensaje, $cabeceras)){
				$this->Session->setFlash(__('Su solicitud fue enviada, muchas gracias por contactarnos.', true));
				$this->set("enviada",true);
			}else {
				$this->Session->setFlash(__('No se pudo enviar su mensaje. Por favor, inténtelo de nuevo.', true));
			}
		}		
	}
	
	function reOrder() {
		/**
		 * Ordena las categorias se une con el widget de sortable
		 */
		foreach($this->data["Item"] as $id=>$posicion) {
			$this->Page->id=$id;
			$this->Page->saveField("order",$posicion);
		}
		echo "yes";
		Configure::write('debug', 0);
		$this->autoRender = false;
		exit();
	}
}
?>