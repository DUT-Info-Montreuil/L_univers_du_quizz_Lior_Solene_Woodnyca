CREATE TABLE Utilisateur(
   idUser SERIAL,
   pseudo VARCHAR(50)  NOT NULL,
   mail VARCHAR(50)  NOT NULL,
   motDePasse VARCHAR(50)  NOT NULL,
   pointxp INT NOT NULL DEFAULT 0,
   piece INT NOT NULL DEFAULT 0,
   indice INT NOT NULL DEFAULT 0,
   estAdmin BOOLEAN NOT NULL DEFAULT FALSE,
   PRIMARY KEY(idUser),
   UNIQUE(pseudo),
   UNIQUE(mail)
);

CREATE TABLE Quizz(
   idQuizz SERIAL,
   nomQuizz VARCHAR(50)  NOT NULL,
   dateQuizz DATETIME NOT NULL DEFAULT NOW(),
   niveau INT NOT NULL,
   Temps INT DEFAULT NULL,
   idUser BIGINT(20) UNSIGNED NOT NULL,
   PRIMARY KEY(idQuizz),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(idUser)
);

CREATE TABLE Tag(
   idTag SERIAL,
   nomTag VARCHAR(50)  NOT NULL,
   PRIMARY KEY(idTag),
   UNIQUE(nomTag)
);

CREATE TABLE QCM(
   idQCM SERIAL,
   Question TEXT NOT NULL,
   reponse1 TEXT,
   reponse2 TEXT,
   reponse3 TEXT,
   reponse4 TEXT,
   ReponseVrai CHAR(4)  NOT NULL,
   xp INT NOT NULL,
   piece INT NOT NULL,
   idQuizz BIGINT(20) UNSIGNED NOT NULL,
   PRIMARY KEY(idQCM),
   FOREIGN KEY(idQuizz) REFERENCES Quizz(idQuizz)
);

CREATE TABLE Theme(
   idTheme SERIAL,
   nomTheme VARCHAR(50)  NOT NULL,
   PRIMARY KEY(idTheme),
   UNIQUE(nomTheme)
);

CREATE TABLE Sauvegarder(
   idUser BIGINT(20) UNSIGNED,
   idQuizz BIGINT(20) UNSIGNED,
   idQCM SERIAL,
   score INT,
   PRIMARY KEY(idUser, idQuizz, idQCM),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(idUser),
   FOREIGN KEY(idQuizz) REFERENCES Quizz(idQuizz),
   FOREIGN KEY(idQCM) REFERENCES QCM(idQCM)
);

CREATE TABLE Associer(
   idTag BIGINT(20) UNSIGNED,
   idTheme BIGINT(20) UNSIGNED,
   PRIMARY KEY(idTag, idTheme),
   FOREIGN KEY(idTag) REFERENCES Tag(idTag),
   FOREIGN KEY(idTheme) REFERENCES Theme(idTheme)
);

CREATE TABLE Jouer(
   idUser BIGINT(20) UNSIGNED,
   idQuizz BIGINT(20) UNSIGNED,
   PRIMARY KEY(idUser, idQuizz),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(idUser),
   FOREIGN KEY(idQuizz) REFERENCES Quizz(idQuizz)
);

CREATE TABLE Rechercher(
   idUser BIGINT(20) UNSIGNED,
   idQuizz BIGINT(20) UNSIGNED,
   idTag BIGINT(20) UNSIGNED,
   PRIMARY KEY(idUser, idQuizz, idTag),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(idUser),
   FOREIGN KEY(idQuizz) REFERENCES Quizz(idQuizz),
   FOREIGN KEY(idTag) REFERENCES Tag(idTag)
);

CREATE TABLE Commenter(
   idUser BIGINT(20) UNSIGNED,
   idQuizz BIGINT(20) UNSIGNED,
   TitreCommetaire VARCHAR(50)  NOT NULL,
   Commentaire TEXT NOT NULL,
   DateCom DATETIME NOT NULL DEFAULT NOW(),
   PRIMARY KEY(idUser, idQuizz),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(idUser),
   FOREIGN KEY(idQuizz) REFERENCES Quizz(idQuizz)
);

CREATE TABLE Defier(
   idUser BIGINT(20) UNSIGNED,
   idQuizz BIGINT(20) UNSIGNED,
   nomDefi VARCHAR(50)  NOT NULL,
   PRIMARY KEY(idUser, idQuizz),
   FOREIGN KEY(idUser) REFERENCES Utilisateur(idUser),
   FOREIGN KEY(idQuizz) REFERENCES Quizz(idQuizz)
);
