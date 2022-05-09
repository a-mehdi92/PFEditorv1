DROP TABLE IF EXISTS LIBRAIRIE;

CREATE TABLE LIBRAIRIE
(ISBN varchar(10), 
Titre varchar(50),
Auteur varchar(20),
Lien varchar(100),
Annee integer,
CONSTRAINT pkn_librarie PRIMARY KEY(ISBN)
);

INSERT INTO librairie(ISBN,Titre,Auteur,Lien,Annee)
VALUES ('34435','L Alchimiste','Paulo COELHO','https://images-na.ssl-images-amazon.com/images/I/51i+SwHF1aL._SY344_BO1,204,203,200_.jpg',1999);

INSERT INTO librairie(ISBN,Titre,Auteur,Lien,Annee)
VALUES ('23435','Harry Potter à l école des sorciers','J.K. ROWLING','https://m.media-amazon.com/images/I/51F5NOrf+XL.jpg',1999);

INSERT INTO librairie(ISBN,Titre,Auteur,Lien,Annee)
VALUES ('13435','Le Seigneur des Anneaux: L intégrale','J.R.R. TOLKIEN','https://images-eu.ssl-images-amazon.com/images/I/51j4h1Jq9ZL._SY291_BO1,204,203,200_QL40_ML2_.jpg',1999);

INSERT INTO librairie(ISBN,Titre,Auteur,Lien,Annee)
VALUES ('65435','Le petit Nicolas','Sempé-Goscinny','https://images-na.ssl-images-amazon.com/images/I/319rilH+YRL._SY344_BO1,204,203,200_.jpg',1999);

