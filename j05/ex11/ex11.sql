SELECT UPPER( fiche_personne.nom ) AS 'NOM', prenom, prix FROM abonnement
	INNER JOIN membre ON abonnement.id_abo=membre.id_abo
	INNER JOIN fiche_personne ON membre.id_membre=fiche_personne.id_perso
	WHERE prix > 42
	ORDER BY nom, prenom ASC;