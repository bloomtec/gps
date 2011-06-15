<div id="main-navigation">
	<div class="languaje">
		<?php echo $html->link("Español",array("controller"=>"pages","action"=>"location","es_es"));?>
		<?php echo $html->link("Ingles",array("controller"=>"pages","action"=>"location","en_us"));?>
	</div>
          <ul class="main_nav">
            
            <li>

            	<?php 
            	echo $html->link("Inicio",
            			"/",
						array(
							"class"=>"color home other",
						)
					);
				?>
            </li>
            <li>
            	<?php 
            	echo $html->link("Conózcanos",
            			'/pages/view/conozcanos',
						array(
							"class"=>"other color conozca",
						)
						);
				?>
            </li>
            <li>
            	<?php 
            	echo $html->link("Ventajas",
            			'/pages/view/ventajas',
						array(
							"class"=>"other color ventajas",
						)
						);
				?>
            </li>
            <li>
            	<?php 
            	echo $html->link("Portafolio",
            			'/pages/view/portafolio',
						array(
							"class"=>"other color porta",
						)
						);
				?>
            </li>
 			<li>
            	<?php 
            	echo $html->link("Contacto",
            			'/pages/view/contacto',
						array(
							"class"=>"other color contacto",
						)
						);
				?>
            </li>
            
          </ul>
</div>