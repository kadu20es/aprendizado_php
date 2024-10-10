<?php

    class ClienteDAO {

        private $conn;

        public function __construct($db) {
            $this->conn = $db;
        }

        public function createCliente($nome, $tipoPessoa, $documento, $email) {
            $query = "INSERT INTO cliente (nome, tipoPessoa, documento, email)
                    VALUES (:nome, :tipoPessoa, :documento, :email)";
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':tipoPessoa', $tipoPessoa);
            $stmt->bindParam(':documento', $documento);
            $stmt->bindParam(':email', $email);

            if ($stmt->execute()) {
                return true;
            }
            return false;
        }
    }

