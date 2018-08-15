<?php
 class Posts extends model{

   public function getPosts($limit){
       $array = array();

       $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT $limit";
       $sql = $this->db->query($sql);


       if($sql->rowCount() > 0){
           $array = $sql->fetchAll();
       }

       return $array;
   }

   public function savePost($titulo, $mensagem, $arquivo){
       if(!empty($titulo) && !empty($mensagem)){

           if (isset($arquivo) && !empty($arquivo['tmp_name'])) {
                $permitidos = array('image/jpeg', 'image/jpg', 'image/png');

                if(in_array($arquivo['type'], $permitidos)){
                    $img_url = md5(time().rand(0, 999)).'.jpg';
                    move_uploaded_file($arquivo['tmp_name'], 'assets/imagens/imgPosts/'.$img_url);

                    $sql = "INSERT INTO posts SET titulo = '$titulo', mensagem = '$mensagem', img_url = '$img_url'";
                    $this->db->query($sql);

                }
           }
       }
   }

 }