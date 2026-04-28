
<?php
    public function recherche($categorie, $motcle) {
        $sql = "SELECT * FROM Site WHERE 1=1";
        $params = [];

        if (!empty($categorie)) {
            $sql .= " AND id_categorie = ?";
            $params[] = $categorie;
        }

        if (!empty($motcle)) {
            $sql .= " AND (titre LIKE ? OR description LIKE ?)";
            $params[] = "%$motcle%";
            $params[] = "%$motcle%";
        }

        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }
    public function getSitesEnAttente() {
        $sql = "SELECT * FROM Site WHERE statut = 'EN_ATTENTE'";
        return $this->db->query($sql)->fetchAll();
    }

    public function validerSite($id) {
        $sql = "UPDATE Site SET statut = 'VALIDE' WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
    }

    public function refuserSite($id) {
        $sql = "UPDATE Site SET statut = 'REFUSE' WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
    }