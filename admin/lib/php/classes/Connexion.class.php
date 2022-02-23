<?php
class Connexion{
    private static $_instance = null;

    public static function getInstance($dsn,$user,$password){
        //si on a pas encore d'objet de connecion
        if (!self::$_instance){
            try {
                self::$_instance = new PDO($dsn,$user,$password);
                print "connecté";
            }catch (PDOException$e){
                print "erreur de connexion".$e->getMessage();
            }
        }
        return self::$_instance;
    }
}