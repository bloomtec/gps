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

		echo $this->Html->css('front');
		
		echo $this->Html->script("https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js");

		echo $scripts_for_layout;
	?>
</head>
	<body id="<?php if(isset($homeID))echo $homeID; else echo "home"; ?>" class="<?php echo $session->read("locale"); ?>">
		<?php $menu = $this -> requestAction("/pages/menu");?>
		<div id="container">
			<div id="header">
			  <?php echo $this->element("header", array("menu"=>$menu));?>
			</div>
			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<?php echo $content_for_layout; ?>			
			</div>
			<div id="footer">
			   <?php echo $this->element("footer", array("menu" => $menu));?>
			</div>
		</div>
	</body>
</html>