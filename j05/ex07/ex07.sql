SELECT titre, resum FROM film
	WHERE (titre LIKE '%42%' || resum LIKE '%42%')
	ORDER BY duree_min ASC;