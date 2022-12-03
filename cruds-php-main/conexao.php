<?php

class conexao{
    public static $instancia;
    public static function getConexao(){
        if(!isset(self::$instancia)){
            self::$instancia = new PDO('mysql:host=localhost; dbname=mercado; charset=utf8','root','root');
            return self::$instancia;
        }else{
            return self::$instancia;
        }
    }
}

?>