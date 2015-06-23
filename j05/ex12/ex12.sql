SELECT nom,prenom FROM fiche_personne
        WHERE prenom LIKE '%-%' OR nom LIKE '%-%' OR nom LIKE '% %' OR prenom LIKE '% %'
        ORDER BY nom,prenom ASC;