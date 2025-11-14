<?php 
class Connection {
    private static $instance = null;

    public static function getInstance() {
        if (self::$instance) {
            try {

                $host = "localhost";
                $dbname = "projeto_bebidas";
                $user = "root";
                $pass = "1234";

                self::$instance = new PDO(
                    "mysql:host=$host;charest=utf8",
                    $user,
                    $pass
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                self::$instance->exec("CreATE DATABASE IF NOT EXISTS $dbname CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

            } catch (PDOException $e) {
                die("Erro ao conectar ao MySQL: " . $e->getMessage());

            
                
            }
        }
            return self::$instance;
    }
}