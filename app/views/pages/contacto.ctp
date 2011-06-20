<?php echo $html->script("http://cdn.jquerytools.org/1.2.5/form/jquery.tools.min.js",false);?>
<?php echo $this->element("header-titulo");?>
<div class="content-info">
	<div class="content-intern contacto">
	<?php echo $form->create("Page",array("action"=>"contacto","controller"=>"pages","novalidate"=>"novalidate"));?>
	<fieldset>
			<ul>
				<li class="casa">Colombia</li>
				<li class="telefono">57 2 3709021</li>
				<li class="celular">57 316 869 1054 - 57 317 6480647</li>
			</ul>
		<p><?php echo $this->Session->flash(); ?></p>
		<?php if(!isset($enviada)):?>
		<?php echo $form->input("nombre_contacto",array('div' => 'nombre-contacto',"label"=>"Escribe tu (s) Nombre (s):","required"=>"required"));?>
		<label>Dirección e-mail:</label>
		<input type="email" required="required" id="PageEmail" name="data[Page][email]">
		<?php echo $form->input("asunto",array('div' => 'telefono-contacto',"label"=>"Tema del mensaje:","required"=>"required"));?>
		<div style="clear:both;"></div>
		<?php echo $form->input("comentario",array('type'=>'textarea','div' => 'comentario-contacto',"label"=>"Escriba su mensaje:","required"=>"required"));?>
		<div style="clear:both;"></div>
		
	</fieldset>
	<?php echo $form->end(__('Envíar', true), array('div' => false));?>
	<?php endif;?>
	<div style="clear:both;"></div>
	
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$.tools.validator.localize("es", {
			'*'			: 'Dato no valido',
			':email'  	: 'direccion de email no valida',
			':number' 	: 'el campo debe ser numerico',
			':url' 		: 'el campo debe ser una url',
			'[max]'	 	: 'el numero no puede ser mayor a $1',
			'[min]'		: 'el numero no puede se menor a $1',
			'[required]'	: 'campo requerido'
		});
		$("form").validator({lang : "es"});
	});
</script>