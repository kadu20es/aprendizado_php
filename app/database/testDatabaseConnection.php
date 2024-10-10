<?php
    require_once __DIR__ . '/../../vendor/autoload.php';
    require_once 'Database.php';

    try {
        $database = new Database();

        $connection = $database->getConnection();

        if ($connection) {
            echo "Conexão realizada com sucesso";
        }
    } catch (PDOException $error) {
        echo "Erro ao conectar com o banco de dados: " . $error->getMessage();
    }