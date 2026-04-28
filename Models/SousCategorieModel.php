<?php

class SousCategorieModel {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getByCategorie($idCategorie) {
        $sql = "SELECT * FROM SousCategorie WHERE idCategorie = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$idCategorie]);
        return $stmt->fetchAll();
    }

    public function getAll() {
        $sql = "SELECT * FROM SousCategorie";
        return $this->db->query($sql)->fetchAll();
    }
}