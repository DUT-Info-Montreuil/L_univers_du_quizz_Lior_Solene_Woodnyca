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

CREATE TABLE Classement(
   nomClassement VARCHAR(50) ,
   joueur1 INT NOT NULL,
   joueur2 INT NOT NULL,
   joueur3 INT NOT NULL,
   joueur4 INT NOT NULL,
   joueur5 INT NOT NULL,
   joueur6 INT NOT NULL,
   joueur7 INT NOT NULL,
   joueur8 INT NOT NULL,
   joueur9 VARCHAR(50)  NOT NULL,
   joueur10 VARCHAR(50)  NOT NULL,
   PRIMARY KEY(nomClassement),
   UNIQUE(joueur1),
   UNIQUE(joueur2),
   UNIQUE(joueur3),
   UNIQUE(joueur4),
   UNIQUE(joueur5),
   UNIQUE(joueur6),
   UNIQUE(joueur7),
   UNIQUE(joueur8),
   UNIQUE(joueur9),
   UNIQUE(joueur10)
);

CREATE TABLE Commentaire(
   nomComentaire TEXT,
   pseudo VARCHAR(50)  NOT NULL,
   PRIMARY KEY(nomComentaire)
);

CREATE TABLE Defi(
   nomDefi VARCHAR(50) ,
   nomQuizz TEXT NOT NULL,
   PRIMARY KEY(nomDefi)
);

CREATE TABLE Utilisateur(
   id INT AUTO_INCREMENT,
   pseudo VARCHAR(50)  NOT NULL,
   mail VARCHAR(50)  NOT NULL,
   motDePasse VARCHAR(50)  NOT NULL,
   pointxp INT NOT NULL,
   piece INT NOT NULL,
   indice INT NOT NULL,
   nomQuestion TEXT,
   nomQCM TEXT,
   PRIMARY KEY(id),
   UNIQUE(pseudo),
   UNIQUE(mail),
   FOREIGN KEY(nomQuestion) REFERENCES Question(nomQuestion),
   FOREIGN KEY(nomQCM) REFERENCES QCM(nomQCM)
);

CREATE TABLE Theme(
   nomTheme VARCHAR(50) ,
   nomClassement VARCHAR(50) ,
   id INT,
   nomTag VARCHAR(50) ,
   PRIMARY KEY(nomTheme),
   UNIQUE(nomClassement),
   FOREIGN KEY(nomClassement) REFERENCES Classement(nomClassement),
   FOREIGN KEY(id) REFERENCES Utilisateur(id),
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
   id INT,
   nomQuizz VARCHAR(50) ,
   PRIMARY KEY(id, nomQuizz),
   FOREIGN KEY(id) REFERENCES Utilisateur(id),
   FOREIGN KEY(nomQuizz) REFERENCES Quizz(nomQuizz)
);

CREATE TABLE Rechercher(
   id INT,
   nomQuizz VARCHAR(50) ,
   nomTag VARCHAR(50) ,
   PRIMARY KEY(id, nomQuizz, nomTag),
   FOREIGN KEY(id) REFERENCES Utilisateur(id),
   FOREIGN KEY(nomQuizz) REFERENCES Quizz(nomQuizz),
   FOREIGN KEY(nomTag) REFERENCES Tag(nomTag)
);

CREATE TABLE Commenter(
   nomQuizz VARCHAR(50) ,
   nomComentaire TEXT,
   PRIMARY KEY(nomQuizz, nomComentaire),
   FOREIGN KEY(nomQuizz) REFERENCES Quizz(nomQuizz),
   FOREIGN KEY(nomComentaire) REFERENCES Commentaire(nomComentaire)
);

CREATE TABLE Contenir(
   nomQuizz VARCHAR(50) ,
   nomDefi VARCHAR(50) ,
   PRIMARY KEY(nomQuizz, nomDefi),
   FOREIGN KEY(nomQuizz) REFERENCES Quizz(nomQuizz),
   FOREIGN KEY(nomDefi) REFERENCES Defi(nomDefi)
);

CREATE TABLE Defier(
   id INT,
   nomDefi VARCHAR(50) ,
   PRIMARY KEY(id, nomDefi),
   FOREIGN KEY(id) REFERENCES Utilisateur(id),
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
