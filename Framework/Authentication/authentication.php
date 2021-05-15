<?php
    namespace Framework\Authentication;

    class authentication{
        public function __construct()
        {
            if(!isset($_SESSION['auth'])){
                $_SESSION['auth'] = false;
            }
        }
        public function isAuth():bool{
            return $_SESSION['auth'];
        }
        public function Auth($login, $pass):bool{
            if($login == "Vlados" && $pass='admin'){
                $_SESSION['auth'] = true;
                $_SESSION['login'] = $login;
                header("Refresh:0");
            }
        }
        public function getLogin():string{
            return $_SESSION['login'];
        }
        public function logOut():void{
            session_destroy();
            header("Refresh:0");
        }
    }