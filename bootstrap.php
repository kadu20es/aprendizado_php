<?php

        define('BASE_PATH', __DIR__);
        define('APP_PATH', BASE_PATH . '/app');

        require_once BASE_PATH . '/vendor/autoload.php';
        require_once BASE_PATH . '/app/database/Database.php';

        date_default_timezone_set('America/Sao_Paulo');

        $dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
        $dotenv->load();

        if($_ENV['APP_ENV'] === 'dev') {
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }

        else {
            ini_set('display_errors', 0);
            ini_set('display_startup_errors', 0);
            error_reporting(0);
        }

        try {
            $database = new Database();
        } catch (PDOException $error) {
            throw new PDOException($error->getMessage(), (int) $error->getCode());
        }
?>