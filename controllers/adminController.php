<?php
    class adminController extends controller {

        public function index() {
            $dados = array();

            $u = new Usuarios();

            if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty('senha')) {

                $email = addslashes($_POST['email']);
                $senha = md5(addslashes($_POST['senha']));



                $_SESSION['logado'] = $u->logar($email, $senha);

            }

            if($u->isLogged()){

                header("Location: /admin/posts");
            }



            $this->loadTemplate('login', $dados);
        }

        public function posts(){
            $dados = array();

            $posts = new Posts();

            if(isset($_POST['titulo']) && !empty($_POST['titulo'])){

                $titulo = addslashes($_POST['titulo']);
                $mensagem = addslashes($_POST['mensagem']);
                $arquivo = $_FILES['arquivo'];

                $posts->savePost($titulo, $mensagem, $arquivo);

            }


            $dados['posts'] = $posts->getPosts(10);


            $this->loadTemplate('posts', $dados);
        }

        public function sair(){

            unset($_SESSION['logado']);
            header("Location: /admin");

        }
    }
?>