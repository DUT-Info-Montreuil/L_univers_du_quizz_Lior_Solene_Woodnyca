DROP SCHEMA if exists universquizz;
CREATE SCHEMA universquizz;
USE universquizz;
CREATE TABLE Question(
   nomQuestion TEXT,
   reponse TEXT NOT NULL,
   xp INT NOT NULL,
   piece INT NOT NULL,
   PRIMARY KEY(nomQuestion)
);

CREATE TABLE Quizz(
   nomQuizz VARCHAR(50) ,
   dateQuizz DATETIME NOT NULL,
   niveau INT NOT NULL,
   PRIMARY KEY(nomQuizz)
);

CREATE TABLE Tag(
   nomTag VARCHAR(50) ,
   PRIMARY KEY(nomTag)
);

CREATE TABLE QCM(
   nomQCM TEXT,
   reponse1 TEXT,
   reponse2 TEXT,
   reponse3 TEXT,
   reponse4 TEXT,
   xp INT NOT NULL,
   piece INT NOT NULL,
   PRIMARY KEY(nomQCM)
);

CREATE TABLE Utilisateur(
   idUser SERIAL,
   pseudo VARCHAR(50) UNIQUE NOT NULL,
   mail VARCHAR(50) UNIQUE  NOT NULL,
   motDePasse VARCHAR(50)  NOT NULL,
   pointxp INT UNSIGNED NOT NULL,
   piece INT UNSIGNED NOT NULL,
   indice INT UNSIGNED NOT NULL,
   nomQuestion TEXT,
   nomQCM TEXT,
   PRIMARY KEY(idUser),

   FOREIGN KEY(nomQuestion) REFERENCES Question(nomQuestion),
   FOREIGN KEY(nomQCM) REFERENCES QCM(nomQCM)
);

CREATE TABLE Classement(
    nomClassement VARCHAR(50) ,
    joueur1 VARCHAR(50) UNIQUE NOT NULL,
    joueur2 VARCHAR(50) UNIQUE NOT NULL,
    joueur3 VARCHAR(50) UNIQUE NOT NULL,
    joueur4 VARCHAR(50) UNIQUE NOT NULL,
    joueur5 VARCHAR(50) UNIQUE NOT NULL,
    joueur6 VARCHAR(50) UNIQUE NOT NULL,
    joueur7 VARCHAR(50) UNIQUE NOT NULL,
    joueur8 VARCHAR(50) UNIQUE NOT NULL,
    joueur9 VARCHAR(50) UNIQUE NOT NULL,
    joueur10 VARCHAR(50) UNIQUE NOT NULL,
    PRIMARY KEY(nomClassement),
    FOREIGN KEY(joueur1) REFERENCES Utilisateur(pseudo),
    FOREIGN KEY(joueur2) REFERENCES Utilisateur(pseudo),
    FOREIGN KEY(joueur3) REFERENCES Utilisateur(pseudo),
    FOREIGN KEY(joueur4) REFERENCES Utilisateur(pseudo),
    FOREIGN KEY(joueur5) REFERENCES Utilisateur(pseudo),
    FOREIGN KEY(joueur6) REFERENCES Utilisateur(pseudo),
    FOREIGN KEY(joueur7) REFERENCES Utilisateur(pseudo),
    FOREIGN KEY(joueur8) REFERENCES Utilisateur(pseudo),
    FOREIGN KEY(joueur9) REFERENCES Utilisateur(pseudo),
    FOREIGN KEY(joueur10) REFERENCES Utilisateur(pseudo)

);

CREATE TABLE Commentaire(
   idCom SERIAL,
   nomComentaire TEXT NOT NULL,
   TitreCom VARCHAR(50)  NOT NULL,
   DateCom DATETIME NOT NULL,
   PRIMARY KEY(idCom)
);


CREATE TABLE Defi(
   nomDefi VARCHAR(50) ,
   nomQuizz TEXT NOT NULL,
   PRIMARY KEY(nomDefi)
);



CREATE TABLE Theme(
   nomTheme VARCHAR(50) ,
   nomClassement VARCHAR(50) ,
   idUser INT,
   nomTag VARCHAR(50) ,
   PRIMARY KEY(nomTheme),
   UNIQUE(nomClassement),
   FOREIGN KEY(nomClassement) REFERENCES Classement(nomClassement),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(idUser),
   FOREIGN KEY(nomTag) REFERENCES Tag(nomTag)
);

CREATE TABLE Sauvegarder(
   nomQuestion TEXT,
   nomQuizz VARCHAR(50) ,
   nomQCM TEXT,
   PRIMARY KEY(nomQuestion, nomQuizz, nomQCM),
   FOREIGN KEY(nomQuestion) REFERENCES Question(nomQuestion),
   FOREIGN KEY(nomQuizz) REFERENCES Quizz(nomQuizz),
   FOREIGN KEY(nomQCM) REFERENCES QCM(nomQCM)
);

CREATE TABLE Trier(
   nomQuizz VARCHAR(50) ,
   nomTag VARCHAR(50) ,
   PRIMARY KEY(nomQuizz, nomTag),
   FOREIGN KEY(nomQuizz) REFERENCES Quizz(nomQuizz),
   FOREIGN KEY(nomTag) REFERENCES Tag(nomTag)
);

CREATE TABLE Jouer(
   idUser INT,
   nomQuizz VARCHAR(50) ,
   PRIMARY KEY(idUser, nomQuizz),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(idUser),
   FOREIGN KEY(nomQuizz) REFERENCES Quizz(nomQuizz)
);

CREATE TABLE Rechercher(
   idUser INT,
   nomQuizz VARCHAR(50) ,
   nomTag VARCHAR(50) ,
   PRIMARY KEY(idUser, nomQuizz, nomTag),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(idUser),
   FOREIGN KEY(nomQuizz) REFERENCES Quizz(nomQuizz),
   FOREIGN KEY(nomTag) REFERENCES Tag(nomTag)
);

CREATE TABLE Commenter(
   idUser INT,
   nomQuizz VARCHAR(50) ,
   idCom INT,
   PRIMARY KEY(idUser, nomQuizz, idCom),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(idUser),
   FOREIGN KEY(nomQuizz) REFERENCES Quizz(nomQuizz),
   FOREIGN KEY(idCom) REFERENCES Commentaire(idCom)
);


CREATE TABLE Contenir(
   nomQuizz VARCHAR(50) ,
   nomDefi VARCHAR(50) ,
   PRIMARY KEY(nomQuizz, nomDefi),
   FOREIGN KEY(nomQuizz) REFERENCES Quizz(nomQuizz),
   FOREIGN KEY(nomDefi) REFERENCES Defi(nomDefi)
);

CREATE TABLE Defier(
   idUser INT,
   nomDefi VARCHAR(50) ,
   PRIMARY KEY(idUser, nomDefi),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(idUser),
   FOREIGN KEY(nomDefi) REFERENCES Defi(nomDefi)
);

CREATE TABLE Comprendre(
   nomQuizz VARCHAR(50) ,
   nomQCM TEXT,
   PRIMARY KEY(nomQuizz, nomQCM),
   FOREIGN KEY(nomQuizz) REFERENCES Quizz(nomQuizz),
   FOREIGN KEY(nomQCM) REFERENCES QCM(nomQCM)
);

CREATE TABLE Inclure(
   nomQuestion TEXT,
   nomQuizz VARCHAR(50) ,
   PRIMARY KEY(nomQuestion, nomQuizz),
   FOREIGN KEY(nomQuestion) REFERENCES Question(nomQuestion),
   FOREIGN KEY(nomQuizz) REFERENCES Quizz(nomQuizz)
);
