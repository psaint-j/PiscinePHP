INSERT INTO `ft_table` ( login, date_de_creation, groupe )
        SELECT nom, date_naissance, 'other' FROM `fiche_personne`
        WHERE nom LIKE '%a%' && LENGTH( fiche_personne.nom ) < 9
        ORDER BY nom ASC
        LIMIT 10;