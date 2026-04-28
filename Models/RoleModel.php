<?php

class RoleModel {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getRolesByUser($idUser) {
        $sql = "SELECT r.nom FROM Role r
                JOIN UtilisateurRole ur ON ur.idRole = r.id
                WHERE ur.idUtilisateur = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$idUser]);
        return $stmt->fetchAll();
    }

    public function isAdmin($idUser) {
        $sql = "SELECT COUNT(*) FROM UtilisateurRole
                WHERE idUtilisateur = ? AND idRole = 1"; // 1 = ADMIN
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$idUser]);
        return $stmt->fetchColumn() > 0;
    }
}