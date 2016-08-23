<?php
get_header(); ?>

<div id="content">
	<section id="sobre">
		<h1 class="title-full small"><div class="animated bounceIn">Eventos</div></h1>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<h4 class="cor-base">Eventos</h4>
					<p>Comemore seu evento no restaurante Aroma e Sabor. Alugamos nosso espaço para eventos empresariais e particulares. 
						<br>O ambiente é muito agradável e tem vista panorâmica para o Mosteiro São Bento e viaduto Santa Ifigência. 
						<br>Oferecemos um cardápio variado e saboroso, com bolos, salgados, tortas, doces e lanches de metro.
						<br><br>Além do espaço você também conta com nossos serviços de buffet:
					</p>
					<ul>
						<li>Serviços de Catering: coffes break, churrascos, aniversários, feijoadas e coqueteis</li>
						<li>Serviços de garçom, copeiros, decoração, tudo para agilizar seus eventos</li>
						<li>Encomendas sob medida</li>
						<li>Cardápío saboroso e variado</li>
					</ul>
				</div>
			</div>		
		</div>
	</section>

	<?php get_template_part( 'template-parts/fotos-sobre'); ?>

	<section id="eventos">
		<div class="container">
			<h1 class="small title-restaurante"><span class="cor-base">Eventos no</span> Aroma e Sabor</h1>
			<ul class="btn-eventos clearfix">
				<li><a href="#corporativos" data-toggle="tab">Corporativos</a></li>
				<li><a href="#particulares" data-toggle="tab">Particulares</a></li>
			</ul><br>
			<div class="tab-content" >
				<div class="tab-pane fade" id="corporativos">
					<ul class="op-eventos">
						<li>Coffe Break</li>
						<li>Confraternizações</li>
						<li>Festa Junina</li>
						<li>Jantares</li>
						<li>Coqueteis</li>
						<li>Final de ano</li>
						<li>Reveillon</li>
					</ul>
				</div>
				<div class="tab-pane fade" id="particulares">
					<ul class="op-eventos">
						<li>Casamentos</li>
						<li>Confraternizações</li>
						<li>Festa Junina</li>
						<li>Jantares</li>
						<li>Aniversários</li>
						<li>Final de ano</li>
						<li>Reveillon</li>
					</ul>					
				</div>
			</div>			
		</div>	
	</section>

	<section id="form-contato">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<?php 
						if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 7 ); }
					?>
				</div>
				<div class="col-md-6">
					<div class="form-desc">
						<p>
							<strong>Comemore seu evento no Aroma e Sabor</strong>
							<br>Preencha o formulário ao lado que entraremos em contato com você!						
						</p>
						<div style="border-top:1px solid white; margin-bottom:20px; margin-top:20px;"></div>
						<p>
							<strong>São Bento</strong>
							<br>Rua São Bento, 545 - 1º andar
							<br>São Paulo - SP
							<br>11 3106-4470  |  11 3106-1544
							<br><br>
							<strong>Libero Badaró</strong>
							<br>Rua Libero Badaró, 370
							<br>São Paulo - SP
							<br>11 3101-9907  |  11 3241-0491
						</p>
					</div>
				</div>
			</div><!-- .row -->
		</div>	
	</section>


	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
