
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
                <li><a href="/home">Home</a></li>
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
                <li class="active"><a class="active" href="/home">Home</a></li>
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

