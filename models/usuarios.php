<?php
 class Usuarios extends model{

     public function isLogged(){
         if(isset($_SESSION['logado']) && !empty($_SESSION['logado'])){
             return true;
         }else{
             return false;
         }
     }

     public function logar($email, $senha){

         $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
         $sql = $this->db->query($sql);

         if($sql->rowCount() > 0){

             $usuario =  $sql->fetch();

             return $usuario['id'];
         }

     }
 }