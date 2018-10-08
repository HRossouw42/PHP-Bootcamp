CREATE TABLE ft_table(
    id INT(11) PRIMARY KEY UNIQUE NOT NULL AUTO_INCREMENT,
    login VARCHAR(8) NOT NULL DEFAULT 'toto',
    groupe ENUM('staff', 'student', 'other') NOT NULL,
    creation_date DATE NOT NULL
)