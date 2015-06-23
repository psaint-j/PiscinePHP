CREATE TABLE IF NOT EXISTS `ft_table` (
        id int NOT NULL AUTO_INCREMENT,
        login varchar(8) DEFAULT 'toto',
        groupe ENUM( 'staff', 'student', 'other' ) NOT NULL,
        date_de_creation date NOT NULL,
        PRIMARY KEY (id)
);
