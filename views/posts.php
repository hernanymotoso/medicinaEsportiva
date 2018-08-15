
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
                    <a href="#"><img src="imagens/facebook.png"></a>
                    <a href="#"><img src="imagens/instagram.png"></a>
                    <img onclick="unMenu()" src="imagens/delete.png"/>
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
                <li><a href="#contato">Contatos</a></li>
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

</header><!--header-->

<section class="posts">
    <div class="container">

        <h2>Área de inserção de notícias</h2>
        <div class="posts">
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                Titulo da notícia <br/>
                <input type="text" name="titulo" require placeholder="Titulo da notícia*"/><br/><br/>

                Mensagem: <br/>
                <textarea placeholder="Mensagem*" name="mensagem"></textarea><br/><br/>

                Imagem: <br/>
                <input type="file" name="arquivo" /><br/><br/>

                <div class="btn">
                    <input type="submit" value="Enviar" />
                </div>
            </form>
        </div><br/>

        <div class="showPosts">
            <h2>Últimas 10 notícias</h2>
            <?php foreach($posts as $post): ?>

                <?php echo $post['titulo']; ?><br/><br/>
                <?php echo $post['mensagem']; ?><br/><br/>

                <img src="<?php echo BASE_URL; ?>/assets/imagens/imgPosts/<?php echo $post['img_url'];?>" border="0" width="300"/><br/><br/><br/>
                <hr/>
                <br/><br/>

            <?php endforeach; ?>
        </div>

        <div class="btn">
            <a href="/admin/sair">Sair</a>
        </div>
    </div>
</section>







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
                        <img  src="<?php echo BASE_URL; ?>/assets/imagens/sumerlogo.png"/>
                    </div>
                </div><!--info-img-->
            </div><!--info-->
            <div class="clear"></div><!--clear-->
        </div><!--show-infos-->
    </div><!--container-->
</section><!--footer-->

