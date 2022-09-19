<?php

class Conexao{
    private static $instancia;

    public static function getConexao(){
        if(!isset(self::$instancia)){// E
            self::$instancia = new PDO("mysql:host=localhost;dbname=alugel_veiculos","root","");
        }
        return self::$instancia;
    }
   
}