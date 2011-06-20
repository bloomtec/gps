<div id="main-navigation">

	<div class="languaje">
		<?php echo $html -> link("Español", array("controller" => "pages", "action" => "location", "es_es"),array("class"=>"es_es"));?>
		<?php echo $html -> link("English", array("controller" => "pages", "action" => "location", "en_us"),array("class"=>"en_us"));?>
	</div>
	<ul class="main_nav">

		<li>
			<?php
			if($session -> read("locale") == "es_es")
				echo $html -> link("Inicio", "/", array("class" => "color home other", ));
			else
				echo $html -> link("Home", "/", array("class" => "color home other", ));
			?>
		</li>
		<li>
			<?php
			echo $html -> link($menu["conozcanos"], '/pages/view/conozcanos', array("class" => "other color conozca", ));
			?>
		</li>
		<li>
			<?php
			echo $html -> link($menu["ventajas"], '/pages/view/ventajas', array("class" => "other color ventajas", ));
			?>
		</li>
		<li>
			<?php
			echo $html -> link($menu["portafolio"], '/pages/view/portafolio', array("class" => "other color porta", ));
			?>
		</li>
		<li>
			<?php
			echo $html -> link($menu["contacto"], '/pages/view/contacto', array("class" => "other color contacto", ));
			?>
		</li>
	</ul>
</div>