<?php

class UtilisateurModel {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function register($mail, $mdp) {
        $sql = "INSERT INTO Utilisateur (mail, mdp) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$mail, $mdp]);
    }

    public function verifyLogin($mail) {
        $sql = "SELECT * FROM Utilisateur WHERE mail = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$mail]);
        return $stmt->fetch();
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM Utilisateur WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}