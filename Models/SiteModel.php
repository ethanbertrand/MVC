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