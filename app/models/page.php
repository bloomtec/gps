<?php
class Page extends AppModel {
	var $name = 'Page';
	var $displayField = 'title';
	var $locale="es_es";
	var $actsAs=array(
		"Translate"=>array(
			"title"=>"title","description"=>"description","content"=>"content"
		)
	);
}
?>