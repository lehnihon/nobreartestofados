<?php
get_header(); ?>

<div id="content">
	<section id="sobre-home">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">Tapeçaria</h1>
					<h2>Tapeçaria de alta qualidade localizada no Tatuapé.</h2>
				</div>
			</div> <br>
			<div class="row">
				<div class="col-md-12 text-left">
					<p>
						A Nobre Arte Design é uma tapeçaria localizada no Tatuapé, nos propomos em revestir e reformar o seu sofá. Somos conhecidos como a Tapeçaria Tatuapé, por ser uma das 
						principais e tradicionais tapeçarias da região do Tatuapé.
					</p>
					<p>
						Nossa tapeçaria conta com grande experiência em reforma de sofás e estofados, com atendimento diferenciado e garantia dos serviços prestados. Nossa tapeçaria desenvolve projetos personalizados e também fabrica cabeceirass de acordo com suas necessidades.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section id="fotos-sobre" class="serv-marg">
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<h2 class="amarelo">Tapeçaria Tatuapé</h2>
					<p class="">A Tapeçaria Tatuapé é uma empresa especializada em reforma de todos os tipos de sofás, estofados em geral, poltronas, puffs, tudo de acordo com a sua necessidade. <br>
					Temos grande conhecimento e experiência em revestimento de sofás, estofados e restaurações. <br>
					Entre em contato com a Tapeçaria Tatuapé e solicite um orçamento sem compromisso.
					</p>
					<ul>
						<li>Atendimento diferenciado com Showroom no Tatuapé</li>
						<li>Tapeçaria localizada no Tatuapé</li>
						<li>Projetos personalizados</li>
						<li>Fabricação de cabeceiras</li>
					</ul>
				</div>
				<div class="col-md-5 text-left">
					<h4>Fotos</h4>
					
					<div class="row">
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto1.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto2.jpg"; ?>"/>
						</div>
					</div>
					<div class="fotos-sobre row">	
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto3.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto4.jpg"; ?>"/>
						</div>
					</div>
			
				</div>
			</div>	
		</div>	
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>
<?php get_footer(); ?>