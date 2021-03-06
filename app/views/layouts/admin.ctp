<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __($PAGE_TITLE . " ::"); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('back');
		
		echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js');
		echo $this->Html->script("jquery-ui.js");
		echo $this->Html->script('ckeditor/ckeditor.js');
		echo $this->Html->script('admin.js');
		
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		
		<div id="header">
			<div class="languaje">
				<?php echo $html -> link("Español", array("controller" => "pages", "action" => "location", "es_es"),array("class"=>"es_es"));?>
				<?php echo $html -> link("English", array("controller" => "pages", "action" => "location", "en_us"),array("class"=>"en_us"));?>
			</div>
			<ul class="nav">
				<li>
					<?php echo $html->link("Páginas", array("controller" => "pages", "action" => "index")); ?>
				</li>
				<li>
					<?php echo $html->link("Noticias", array("controller" => "news", "action" => "index")); ?>
					<ul>
						<li>
							<?php echo $html->link("Añadir Noticia", array("controller" => "news", "action" => "add")); ?>
						</li>
					</ul>
				</li>
				<li>
					<?php echo $html->link("Usuarios", array("controller" => "users", "action" => "index")); ?>
				</li>
				<li>
					<?php echo $html->link(__("logout", true), array("controller" => "users", "action" => "logout"), array("class"=>"logout"))?>
				<li>
			</ul>
		</div>
		
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		
		<div id="footer">
			<!-- FOOTER CONTENT -->
		</div>
		
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>