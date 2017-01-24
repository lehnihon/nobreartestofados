<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row">		
				<?php putRevSlider( "banner-index" ) ?>		
			</div>
		</div>
	</section>
	<section id="sobre-home">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">Tapeçaria e reforma de estofados no Tatuapé</h1>
					<h2>A Nobre Arte Design é uma tapeçaria de alta qualidade localizada no Tatuapé.</h2>
				</div>
			</div> <br>
			<div class="row">
				<div class="col-md-6 text-left">
					<p>
						A Nobre Arte é uma tapeçaria que está localizada no bairro do Tatuapé, e é uma 
						empresa especializada em serviços de tapeçaria e reforma de estofados em geral.						
					</p>
					<p>
						Nossa tapeçaria tem como visão de futuro ser referência em qualidade e 
						atendimento no mercado de estofados, tapeçaria e artigos para decoração e 
						design de interiores. 						
					</p>
					<p>
						A tapeçaria Nobre Arte Design realiza uma prévia verificação do serviço de 
						tapeçaria e reforma de estofado a ser realizado, pode ser pessoalmente ou via 
						internet.						
					</p>
				</div>
				<div class="col-md-6 text-left">
					<p>
						Realizamos sem compromisso um orçamento detalhado dos serviços e produtos 
						que serão utilizados e fornecemos todo o suporte de retirada e entrega no cliente.						
					</p>
					<p>
						A Nobre Arte Design conta com uma equipe especializada em desmontagem e 
						montagem de estofados.						
					</p>
					<p>
						Trabalhamos com os principais fornecedores do mercado de tapeçaria e 
						executamos todas as reformas de estofados com produtos de procedência, 
						qualidade e garantias.								
					</p>
				</div>
			</div>
		</div>
	</section>

	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<h2 class="amarelo">Reforma de Estofados no Tatuapé</h2>
					<p class="">A Nobre Arte Design garante totalmente a qualidade de seus serviços e produtos 
utilizados, além da mão de obra especializada e toda a experiência para concluir 
perfeitamente o serviço da Reforma de Estofados. <br>
					Executamos orçamentos sem compromisso por e-mail, whatsApp e pessoalmente.<br>
Entre em contato conosco e tenha a qualidade que seu estofado merece!

					</p>
					<ul style="padding-left: 0px">
						<li>Reforma de sofás, </li>
						<li>cadeiras e bancos,</li>
						<li>poltronas e puffs, </li>
						<li>reforma de estofados em geral.</li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) )."sobre"; ?>" class="btn-amarelo">CONFIRA</a>
				</div>
				<div class="col-md-5 text-left">
					
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

	<section id="maps">
		<div class="container">
			<div class="row text-left detalhes-maps">
				<div class="col-md-12">
					<h2 class="amarelo">Localização da Tapeçaria</h2>
					<p>
						Rua São Jorge, 86 - Tatuapé, São Paulo - SP<br>
						<strong>Telefone.: </strong>11 3938-0200 <strong>Email.: </strong>contato@nobreartedesign.com.br
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 videoWrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.0003376679856!2d-46.56683158444546!3d-23.532490266413117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ee54bb4a53b%3A0x5bfb87542ddadfac!2sR.+S%C3%A3o+Jorge%2C+86+-+Parque+S%C3%A3o+Jorge%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1463247862636" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>				
				</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
