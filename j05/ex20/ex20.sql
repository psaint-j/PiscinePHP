SELECT film.id_genre, genre.nom AS 'nom genre', film.id_distrib, distrib.nom AS 'nom distrib', film.titre AS 'titre film' FROM film
        LEFT JOIN genre ON film.id_genre=genre.id_genre
        LEFT JOIN distrib ON film.id_distrib=distrib.id_distrib
        WHERE ( film.id_genre >= 4 && film.id_genre <= 8 );