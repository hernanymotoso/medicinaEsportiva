
	<header>
		<div class="menu-mobile">
				<div class="min"><img src="<?php echo BASE_URL; ?>/assets/imagens/minilogo.png"></div>
				<img src="<?php echo BASE_URL; ?>/assets/imagens/mobile.png" onClick="menu()">
				<div onclick="unMenu()" class="mini-fone">
					<img src="<?php echo BASE_URL; ?>/assets/imagens/mn.png">
				</div>
		
			<div class="clear"></div>
			<nav id="mobile-nav" onclick="unMenu()">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#clinica">A Clinica</a></li>
					<li><a href="#especialidade">Especialidade</a></li>
					<li><a href="#Cclinico">Corpo Clinico</a></li>
					<li><a href="#noticias">Notícias</a></li>
					<li><a href="#contato">Contato</a></li>
					<li>
						<a href="#"><img src="<?php echo BASE_URL; ?>/assets/imagens/facebook.png"></a>
						<a href="#"><img src="<?php echo BASE_URL; ?>/assets/imagens/instagram.png"></a>
						<img onclick="unMenu()" src="<?php echo BASE_URL; ?>/assets/imagens/delete.png"/>
					</li>
				</ul>
			</nav>
		</div><!--menu-mobile-->
		  
		<div class="container ct-menu">
			<div class="logo"><img src="<?php echo BASE_URL; ?>/assets/imagens/logo.png"></div><!--logo-->

			<nav class="menu-desktop">
				<ul>
					<li class="active"><a class="active" href="#">Home</a></li>
					<li><a href="#clinica">A Clinica</a></li>
					<li><a href="#especialidade">Especialidade</a></li>
					<li><a href="#Cclinico">Corpo Clinico</a></li>
					<li><a href="#noticias">Notícias</a></li>
					<li><a href="#contato">Contato</a></li>
					<li>
						<a href="#">	
							<img src="<?php echo BASE_URL; ?>/assets/imagens/telefone.png"/>
							<p>13 3333.Clique</p>
						</a>
					</li>
				</ul>
			</nav><!--menu-desktop-->
			<div class="clear"></div><!--clear-->
		</div><!--container-->

		
		<div class="slideshow" id="slideshow">
			<div class="slide-bolinhas">
				<div class="bolinha ativo" onclick="mudarSlide(0)"></div><!--bolinha-->
				<div class="bolinha" onclick="mudarSlide(1)"></div><!--bolinha-->
				<div class="bolinha" onclick="mudarSlide(2)"></div><!--bolinha-->
			</div><!--slide-bolinhas-->
			<div class="slideshow-area">
				<div class="slide" style="background-image: url('<?php echo BASE_URL; ?>/assets/imagens/bg1.png');">
					<div class="container">
						<p>Clinica Especializada em</p>
						<h2>MEDICINA</h2><h2>ESPORTIVA</h2>
						<p>Lorem ipsum dolor sit amet, consectetur<br/> adipisicing elit. Expedita dolorum<br/> necessitatibus suscipit fugit, iure!</p>
					</div>
				</div><!--slide-->
				<div class="slide" style="background-image: url('<?php echo BASE_URL; ?>/assets/imagens/bg1.png');">
					<div class="container">
						<p>Clinica Especializada em</p>
						<h2>MEDICINA</h2><h2>ESPORTIVA</h2>
						<p>Lorem ipsum dolor sit amet, consectetur<br/> adipisicing elit. Expedita dolorum<br/> necessitatibus suscipit fugit, iure!</p>
					</div>
				</div><!--slide-->
				<div class="slide" style="background-image: url('<?php echo BASE_URL; ?>/assets/imagens/bg1.png');">
					<div class="container">
						<p>Clinica Especializada em</p>
						<h2>MEDICINA</h2><h2>ESPORTIVA</h2>
						<p>Lorem ipsum dolor sit amet, consectetur<br/> adipisicing elit. Expedita dolorum<br/> necessitatibus suscipit fugit, iure!</p>
					</div>
				</div><!--slide-->
				
			</div><!--slideshow-area-->
			<div class="clear"></div>
		</div><!--slideshow-->
	</header><!--header-->
	<section id="clinica" class="conheca-clinica">
		<div class="container">
			<div class="conheca-text">
				<h3>Seja bem-vindo</h3>
				<h2>CONHEÇA A CLÍNICA</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing consectetur adipisicing consectetur adipisicing consectetur adipisicing consectetur adipisicing consectetur adipisicing consectetur adipisicing elit. Dolores ipsa consectetur amet est fugit ur adipisicing elit. Dolores ipsa consectetur amet est fugit</p>
			</div><!--conheca-text-->

		</div><!--container-->
		<div class="conhecashow" id="conhecashow">
			<div class="conheca-bolinhas">
				<div class="b3 bln1 conhecabolinha ativator" onclick="mudaCo(0)"></div><!--bolinha-->
				<div class="b3 bln2 conhecabolinha" onclick="mudaCo(1)"></div><!--bolinha-->
				<div class="b3 bln3 conhecabolinha" onclick="mudaCo(2)"></div><!--bolinha-->
				<div class="b3 bln4 conhecabolinha" onclick="mudaCo(3)"></div><!--bolinha-->
			</div><!--slide-bolinhas-->

			<div class="conhecashow-area">

				<div class="conheca"> 		
					<div><img src="<?php echo BASE_URL; ?>/assets/imagens/Shape4.png"/></div>
					<div class="text-container-single">
						<h2>Lorem Ipsum Color</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dolores voluptates aperiam eligendi magni,doloribus?</p>
					</div>

				</div><!--conheca-->
				<div class="conheca">		
					<div><img src="<?php echo BASE_URL; ?>/assets/imagens/Shape3.png"/></div>
					<div class="text-container-single">
						<h2>Lorem Ipsum Color</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dolores voluptates aperiam eligendi magni,doloribus?</p>
					</div>
				</div><!--conheca-->
				<div class="conheca" >
					<div><img src="<?php echo BASE_URL; ?>/assets/imagens/Shape2.png"/></div>
					<div class="text-container-single">
						<h2>Lorem Ipsum Color</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dolores voluptates aperiam eligendi magni,doloribus?</p>
					</div>
				</div><!--conheca-->
				<div class="conheca">		
					<div><img src="<?php echo BASE_URL; ?>/assets/imagens/Shape1.png"/></div>
					<div class="text-container-single">
						<h2>Lorem Ipsum Color</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dolores voluptates aperiam eligendi magni,doloribus?</p>
					</div>
				</div><!--conheca-->
				
			</div><!--slideshow-area-->
			<div class="clear"></div>
			</div><!--slideshow-->


	</section><!--conheca-clinica-->
		
	<div class="galeria" id="galeria">
        <div class="galeria-bolinhas">
				<div class="g bo0 bolinha ativo" onclick="mudagale(0)"></div><!--bolinha-->
				<div class="g bo1 bolinha" onclick="mudagale(1)"></div><!--bolinha-->
				<div class="g bo3 bolinha" onclick="mudagale(2)"></div><!--bolinha-->
				<div class="g bo4 bolinha" onclick="mudagale(3)"></div><!--bolinha-->
				<div class="g bo5 bolinha" onclick="mudagale(4)"></div><!--bolinha-->
				<div class="g bo6 bolinha" onclick="mudagale(5)"></div><!--bolinha-->
				<div class="g bo7 bolinha" onclick="mudagale(6)"></div><!--bolinha-->
				<div class="g bo8 bolinha" onclick="mudagale(7)"></div><!--bolinha-->
				
			</div><!--slide-bolinhas-->
		<div class="galeria-area">
			<div class="foto" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/galery1.png');"></div><!--slide-->
			<div class="foto" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/galery2.png');"></div><!--slide-->
			<div class="foto" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/galery3.png');"></div><!--slide-->
			<div class="foto" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/galery4.png');"></div><!--slide-->
			<div class="foto" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/galery5.png');"></div><!--slide-->
			<div class="foto" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/galery1.png');"></div><!--slide-->
			<div class="foto" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/galery1.png');"></div><!--slide-->
			<div class="foto" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/galery1.png');"></div><!--slide-->
			
							
		</div><!--slideshow-area-->
		<div class="clear"></div>
	</div>
	
	<div class="especialidades">
		<div class="titulo-esp">
			<h3>Como podemos ajudar</h3>
			<h2>ESPECIALIDADES</h2>
		</div>
		<div class="line">
		<div class="container">

			<div class="espshow" id="espshow">
				
				<div class="slide-bolinhas">
					<div class="b2 bolinha active" onclick="mudaResp(0), mudaR(0)"></div>
					<div class="b2 bolinha" onclick="mudaResp(1), mudaR(1)"></div>
					<div class="b2 bolinha" onclick="mudaResp(2), mudaR(2)"></div>
				</div>
			
				<div id="especialidade" class="espshow-area">
					<div class="esp active" onclick="mudaResp(0)">
						<div class="img-suport">
							<img src="<?php echo BASE_URL; ?>/assets/imagens/orto.png"/>
						</div><!--img-suport-->
						<div class="p-text">
							<p>Ortopedia</p>
						</div><!--p-text-->
					</div><!--esp-->

					<div class="esp" onclick="mudaResp(1)">
						<div class="img-suport">
							<img src="<?php echo BASE_URL; ?>/assets/imagens/mao.png"/>
						</div><!--img-suport-->
						<div class="p-text">
							<p>Fisioterapia</p>
						</div><!--p-text-->
					</div><!--slide-->

					<div class="esp" onclick="mudaResp(2)">
						<div class="img-suport">
							<img src="<?php echo BASE_URL; ?>/assets/imagens/bola.png"/>
						</div><!--img-suport-->
						<div class="p-text">
							<p>Medicina Esportiva</p>
						</div><!--p-text-->
					</div><!--esp-->	
				</div><!--espshow-area-->
				<div class="clear"></div>
			</div><!--espshow-->
		</div><!--container-->
		</div><!--line-->

		<div class="container">
			<div class="espshow2" id="espshow2">
					
					<div class="espshow-area2">
						<div class="esp2" >
							<div class="esp-text2">
								<h2>Ortopedia</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam itaque iste, sapiente incidunt ut optio consequuntur assumenda illum 
								    consequuntur assumenda illum consequuntur assumenda illumbeatae!
								</p>
								<nav class="nav-text">
									<ul>
										<li>Lorem Ipsum Dolor</li>
										<li>Lorem Ipsum Dolor</li>
										<li>Lorem Ipsum Dolor</li>
										<li>Lorem Ipsum Dolor</li>
										<li>Lorem Ipsum Dolor</li>
									</ul>
								</nav>

							</div><!--esp-text2-->
							<div class="esp-img"></div>
						</div><!--esp2-->	

						<div class="esp2" >
							<div class="esp-text2">
								<h2>Fisioterapia</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam itaque iste, sapiente incidunt ut optio consequuntur assumenda illum 
								    consequuntur assumenda illum consequuntur assumenda illumbeatae!
								</p>
								<nav class="nav-text">
									<ul>
										<li>Lorem Ipsum Dolor</li>
										<li>Lorem Ipsum Dolor</li>
										<li>Lorem Ipsum Dolor</li>
										<li>Lorem Ipsum Dolor</li>
										<li>Lorem Ipsum Dolor</li>
									</ul>
								</nav>

							</div><!--esp-text2-->
							<div class="esp-img"></div>
						</div><!--esp2-->	

						<div class="esp2" >
							<div class="esp-text2">
								<h2>Medicina Esportista</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam itaque iste, sapiente incidunt ut optio consequuntur assumenda illum 
								    consequuntur assumenda illum consequuntur assumenda illumbeatae!
								</p>
								<nav class="nav-text">
									<ul>
										<li>Lorem Ipsum Dolor</li>
										<li>Lorem Ipsum Dolor</li>
										<li>Lorem Ipsum Dolor</li>
										<li>Lorem Ipsum Dolor</li>
										<li>Lorem Ipsum Dolor</li>
									</ul>
								</nav>

							</div><!--esp-text2-->
							<div class="esp-img"></div>
						</div><!--esp2-->						
					</div><!--espshow-area-->
					<div class="clear"></div>
				</div><!--espshow-->
			</div>
		</div>
	<div><!--container-->	
	
		
		<div id="Cclinico" class="corpo-clinico">
			<div class="container">
				<div class="titulo-corpo">
					<h3>Nossos especialistas</h3>
					<h2>CORPO CLINICO</h2>
				</div>
				
				<div class="clinicoshow" id="clinicoshow">
					<img onclick="showagenda()" src="<?php echo BASE_URL; ?>/assets/imagens/consulta.png">
					<div class="clinicoshow-area">
						<div class="clinico">
							<div class="clinico-img">
								<div class="img-clinico" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/dr2.png');"></div>
								<div class="img-clinico" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/dr1.png');"></div>
								<div class="img-clinico" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/dr3.png');"></div>
							</div><!--clinico-img-->

							<div class="clinico-text">
								<h2>Dr. Lorem Ipsum2</h2>
								<h3>Fisioterapeuta | CRM: 00.000</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam itaque iste, sapiente incidunt ut optio consequuntur assumenda illum 
								 	consequuntur assumenda illum consequuntur assumenda illumbeataeconsequuntur assumenda illum consequuntur assumen!
								</p>
								<p>assumenda illumbeataeconsequuntur assumenda illum consequuntur assumenda illumbeatae!</p>
								
								<div class="arrows-clinico">
									<img style="cursor: pointer;" class="img1" onclick="mudarC(0)" src="<?php echo BASE_URL; ?>/assets/imagens/Arrow-left.png">
									<img style="cursor: pointer;" class="img2" onclick="mudarC(1)" src="<?php echo BASE_URL; ?>/assets/imagens/Arrow-right.png">
								</div><!--arrows-clinico-->
								<div class="clear"></div><!--clear-->
							</div><!--clinico-text-->
						</div><!--clinico-->

						<div class="clinico">
							<div class="clinico-img">
								<div class="img-clinico" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/dr2.png');"></div>
								<div class="img-clinico" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/dr1.png');"></div>
								<div class="img-clinico" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/dr3.png');"></div>
							</div><!--clinico-img-->

							<div class="clinico-text">
								<h2>Dr. Lorem Ipsum2</h2>
								<h3>Fisioterapeuta | CRM: 00.000</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam itaque iste, sapiente incidunt ut optio consequuntur assumenda illum 
								 	consequuntur assumenda illum consequuntur assumenda illumbeataeconsequuntur assumenda illum consequuntur assumen!
								</p>
								<p>assumenda illumbeataeconsequuntur assumenda illum consequuntur assumenda illumbeatae!</p>
								
								<div class="arrows-clinico">
									<img style="cursor: pointer;" class="img1" onclick="mudarC(0)" src="<?php echo BASE_URL; ?>/assets/imagens/Arrow-left.png">
									<img style="cursor: pointer;" class="img2" onclick="mudarC(1)" src="<?php echo BASE_URL; ?>/assets/imagens/Arrow-right.png">
								</div><!--arrows-clinico-->
								<div class="clear"></div><!--clear-->
							</div><!--clinico-text-->
						</div><!--clinico-->

						<div class="clinico">
							<div class="clinico-img">
								<div class="img-clinico" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/dr2.png');"></div>
								<div class="img-clinico" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/dr1.png');"></div>
								<div class="img-clinico" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/dr3.png');"></div>
							</div><!--clinico-img-->

							<div class="clinico-text">
								<h2>Dr. Lorem Ipsum2</h2>
								<h3>Fisioterapeuta | CRM: 00.000</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam itaque iste, sapiente incidunt ut optio consequuntur assumenda illum 
								 	consequuntur assumenda illum consequuntur assumenda illumbeataeconsequuntur assumenda illum consequuntur assumen!
								</p>
								<p>assumenda illumbeataeconsequuntur assumenda illum consequuntur assumenda illumbeatae!</p>
								
								<div class="arrows-clinico">
									<img style="cursor: pointer;" class="img1" onclick="mudarC(0)" src="<?php echo BASE_URL; ?>/assets/imagens/Arrow-left.png">
									<img style="cursor: pointer;" class="img2" onclick="mudarC(1)" src="<?php echo BASE_URL; ?>/assets/imagens/Arrow-right.png">
								</div><!--arrows-clinico-->
								<div class="clear"></div><!--clear-->
							</div><!--clinico-text-->
						</div><!--clinico-->
						<div class="clear"></div><!--clear-->
					</div><!--clinicoshow-area-->
				</div><!--clinicoshow-->
			</div><!--container-->

		</div>
	</div>
	

	
	<section id="noticias" class="noticias">
		<div class="container">
			<h3>Saiba mais</h3>
			<h2>NOTÍCIAS</h2>
			<div class="show-noticias">
				<?php foreach($posts as $post): ?>
                    <div class="noticia-single">

                        <div class="noticia-img" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/imgPosts/<?php echo $post['img_url']?>');">
                            <div class="noticia-date" style="background-image:url('<?php echo BASE_URL; ?>/assets/imagens/Ellipse.png');"><!--<h5>00</h5><p>SET</p>--></div><!--noticia-date-->
                            <div class="clear"></div><!--clear-->
                        </div><!--noticia-img-->
                        <div class="noticia-mini-text">
                            <p>
                                <?php echo $post['titulo']?>
                            </p>
                        </div><!--noticia-mini-text-->
                    </div><!--noticias-single-->
                <?php endforeach; ?>


				<div class="clear"></div><!--clear-->
			</div><!--show-noticias-->
            <a href="/home/mNoticias" style="text-decoration: none;"><div style="cursor: pointer;" class="btn"><p>MAIS NOTÍCIAS</p></div></a>
		</div><!--container-->
	</section><!--section-noticias-->
	
	<section class="mapa" id="mapa">
		<div id="contato" class="container">
			<div class="form" id="form">
				<h2>AGENDAR CONSULTA</h2>
				<form>
					<div class="form-wraper w50">
						<input class="place" placeholder="Nome" name="nome" type="text" required />
					</div><!--form-wraper w50-->
					
					<div class="form-wraper w50">
						<input class="place" placeholder="Telefone" name="telefone" type="telefone" required/>
					</div><!--form-wraper w50-->

					<div class="form-wraper w50">
						<input class="place" placeholder="E-mail" name="e-mail" type="e-mail" required/>
					</div><!--form-wraper w50-->

					<div class="form-wraper w50">
						<input class="place" placeholder="Motivo da Consulta" name="motivo" type="text" required/>
					</div><!--form-wraper w50-->

					
					<div class="form-wraper w50">
						<input placeholder="Data" class="textbox-n" type="text" onfocus="(this.type='date')"  id="date" required />
					</div><!--form-wraper w50-->

					<div class="form-wraper w50">
						<input placeholder="Período" class="textbox-n" type="text" onfocus="(this.type='time')"  id="periodo" required />
						<!--<input placeholder="Período" name="periodo" type="time"/>-->
					</div><!--form-wraper w50-->

					<div class="form-wraper w100">
						<textarea placeholder="Mensagem (opcional)"></textarea>
					</div><!--form-wraper w100-->

					<div class="form-wraper w50 btn wsuport" style="text-align:center;">
						<input type="submit" name="acao" value="ENVIAR"/>
					</div><!--form-wraper w100-->
					<img onclick="noShowagenda()" src="<?php echo BASE_URL; ?>/assets/imagens/delete.png"/>
					<div class="clear"></div><!--clear-->
				</form>
			</div><!--form-->
		</div><!--container-->
	</section><!--section mapa-->	

	<section class="infos">
		<div class="container">
			<div class="show-infos">
				<div class="info">
					<div class="info-img">
						<img src="<?php echo BASE_URL; ?>/assets/imagens/ping.png"/>
					</div><!--info-img-->		

					<div class="info-text">
						<h3>AV. LOREM IPSUM DOLOR. 333<br/>GONZAGA - SANTOS - SP</h3>
					</div><!--info-text-->
				</div><!--info-->

				<div class="info">
					<a href="#">	
						<div class="info-img">
							<img src="<?php echo BASE_URL; ?>/assets/imagens/wfone.png"/>
						</div><!--info-img-->		
											
						<div class="info-text">
							<h3>13 33333.CLIQUE</h3>
						</div><!--info-text-->
				    </a>
				</div><!--info-->

				<div class="info">
					<div class="info-img">
						<img src="<?php echo BASE_URL; ?>/assets/imagens/pingcar.png"/>
					</div><!--info-img-->		

					<div class="info-text">
						<h3>ESTACIONAMENTO<br/>NO LOCAL</h3>
					</div><!--info-text-->
				</div><!--info-->
				<div class="clear"></div><!--clear-->
			</div><!--show-infos-->
		</div><!--container-->
	</section><!--section-infos-->

	<section class="footer">
		<div class="container">
			<div class="show-infos">
				<div class="info">
					<div class="info-text w100">
						<p>Todos os direitos reservados - 2018</p>
					</div><!--info-text-->
				</div><!--info-->
				<div class="info">						
					<div class="info-img w100">
						<img src="<?php echo BASE_URL; ?>/assets/imagens/Logo.png"/>
					</div><!--info-img-->									
			 	</div><!--info-->

				<div class="info summer" style="text-align: center;">
					<div class="info-img w100">
						<div class="img">
							<img  src="<?php echo BASE_URL; ?>/assets/imagens/top.png"/>
						</div>
					</div><!--info-img-->		
				</div><!--info-->
				<div class="clear"></div><!--clear-->
			</div><!--show-infos-->	
		</div><!--container-->
	</section><!--footer-->
