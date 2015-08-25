<?php


class DB {

    protected static $connection = NULL;

    public static function getDBConnection() {
        
        if (!self::isConnected()) {

            try {

                self::$connection = new PDO('mysql:host=localhost;
                                dbname=testdb;
                                charset=utf8', 'username', 'password');

                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {

                die($e->getMessage());

            }
        }
    
        return self::$connection;
    
    }

    protected static function isConnected() {
        
        if(self::$connection) {

            return true;

        } else {

            return false;
            
        }
    }
}