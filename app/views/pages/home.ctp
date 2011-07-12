 <?php echo $this->element("header-titulo");?>
<div class="content-info">
	<div class="content-left">
		<div class="portafolio">
			<h1>Portafolio</h1>
			<?php echo $this->Html->image('foto1.png', array('alt' => 'portafolio 1','class'=>'primero'))?>
    		<?php echo $this->Html->image('foto2.png', array('alt' => 'portafolio 2'))?>
    		<?php echo $this->Html->image('foto3.png', array('alt' => 'portafolio 3'))?>
			<?php echo $this->Html->link('more', '/pages/view/portafolio', array('class'=>'more')); ?>
		</div>
		<div class="informacion">
			<h1>Noticias</h1>
			<!-- <p>
				Global Pharma Solutions cuenta con un Staff que garantiza la estructura de Gestión  de Calidad  (Quality Management System) acorde a Buenas Prácticas de Manufactura (GMP´s) según  Informe 37 y a las últimas tendencias de la Organización Mundial de la Salud  (OMS) y FDA – ICH Q10. 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p> -->
			<p>
				<?php
					$ultima_noticia = $this -> requestAction('news/getNews');
					if (!empty($ultima_noticia)) {
						echo '<b>' . $ultima_noticia['News']['title'] . '</b>';
						echo '<br />';
						echo '<br />';
						echo $ultima_noticia['News']['description'];
						echo '<br />';
						echo '<br />';
						echo $ultima_noticia['News']['content'];
					}
				?>
			</p>
			<?php echo $this->Html->link('more', '/pages/view/noticias', array('class'=>'more')); ?>
			<h1>Ventajas</h1>
			<!-- <p>
				Global Pharma Solutions integra un Capital humano directivo  y operativo con alto nivel de Know How farmacéutico trasnacional, innovación tecnológica y técnica y experiencia  en proyectos farmacéuticos de gran impacto en Latinoamérica.
			</p> -->
			<p>
				<?php
					echo $this -> requestAction('pages/ventajas');
				?>
			</p>
			<?php echo $this->Html->link('more', '/pages/view/ventajas', array('class'=>'more')); ?>
		</div>
	</div>
	<div class="content-right">
		<div class="informacion">
			<h1>Conózcanos</h1>
			<div class="conozcanos">
				<!-- <p>
					Global Pharma Solutions es un Proyecto de compañía maquiladora de medicamentos  especiales para uso humano,  con Supply Chain Integral  y  estructura de Gestión de Calidad (Quality Management System), y de diseño y construcción de Plantas Farmacéuticas acorde a GMP’s según Informe 37 de la
				</p> -->
				<p>
					<?php
						echo $this -> requestAction('pages/conozcanos');
					?>
				</p>
			</div>
			<?php echo $this->Html->link('more', '/pages/view/conozcanos', array('class'=>'more')); ?>
		</div>
	</div>
	<div style="clear:both"></div>
</div>