<?php

    require_once __DIR__ . '/../../vendor/autoload.php';


    class Database {
        private $pdo;


        public function __construct(){

            $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../../');
            $dotenv->load();
            echo $_ENV['DB_DATABASE'];
            $dotenv->load();

            $host = $_ENV['DB_HOST'];
            $db = $_ENV['DB_CONNECTION'];
            $user = $_ENV['DB_USERNAME'];
            $pass = $_ENV['DB_PASSWORD'];
            $port = $_ENV['DB_PORT'];
            $charset = 'utf8mb4';

            $dsn = "$db:host=$host;port=$port;dbname=$db;charset=$charset";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            try {
                $this->pdo = new PDO($dsn, $user, $pass, $options);
            } catch (PDOException $error) {
                throw new PDOException($error->getMessage(), (int) $error->getCode());
            }
        }

        public function getConnection() {
            return $this->pdo;
        }

    }

?>