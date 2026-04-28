<?php

class SignalementModel {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function signaler($idUser, $idSite, $motif) {
        $sql = "INSERT INTO Signalement (idUtilisateur, idSite, motif, date, statut)
                VALUES (?, ?, ?, NOW(), 'EN_ATTENTE')";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$idUser, $idSite, $motif]);
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM Signalement")->fetchAll();
    }

    public function traiter($id) {
        $sql = "UPDATE Signalement SET statut = 'TRAITE' WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
    }
}
