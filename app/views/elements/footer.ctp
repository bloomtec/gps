<ul>
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
		echo $html -> link($menu["conozcanos"], '/pages/view/contacto', array("class" => "other color contacto", ));
		?>
	</li>
</ul>
<h4>© all rights reserved 2011 TIMELINE COLOMBIA</h4>
<div style="clear:both">
</div>