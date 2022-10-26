insert into theme (nomTheme) VALUE ("culture général");
insert into theme (nomTheme) VALUE ("japanimation");
insert into theme (nomTheme) VALUE ("Serie");
insert into theme (nomTheme) VALUE ("Film");
insert into Utilisateur (idUser, pseudo, mail, motDePasse, estAdmin) VALUES (0, "root", "root@gmail.com", "Toto", 1);

insert into Quizz (nomQuizz, niveau, idUser) VALUES ("Quiz Marvel", 1, 0);
/* Quizz Marvel */
insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp)
VALUES ("Dans quelle film Marvel apparait Whiplash ?",
		"Jutice League",
		"Iron man",
		"Iron man 2",
		"Armageddon",
		"c", 10);


insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp)
VALUES ("Que veut Thanos ?",
		"Exterminer la motié de l'univers",
		"Faire une paella géante",
		"Conquerir le MONDE",
		"Enlever la princesse peach", "a", 5);

insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp)
VALUES ("Pourquoi veut-il faire ça ?",
		"Pour conquérir le coeur de la Mort",
		"Parce que !",
		"Pour sauver l'autre motié du manque de ressource",
		"Pour devenir le plus fort de l'univers", "ac", 10);

insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp)
values ("Dans quelle film apparait Malekith ?",
		"Thor",
		"Thor : le monde des tenebres",
		"Thor : Raganarok",
		"Thor : Love and Thunder", "b", 5);
insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp)
values ("Dans quelle pays Tony Stark a t-il été enlevé ?",
		"Iran",
		"Afghanistan",
		"Irak",
		"Syrie", "b", 10);

insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp)
values ("Qui apparait à lors de la scene post-credit d'Iron man ",
		"Thanos",
		"Nick Furry",
		"Captain America",
		"Tony stark", "b", 5);

insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp)
VALUES ("De quoi parle t-il ?",
		"De Thanos",
		"De son four non éteint",
		"De l'initiative Avengers",
		"De Captain Marvel", "c", 5);


