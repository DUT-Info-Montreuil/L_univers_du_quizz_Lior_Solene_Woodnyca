insert into theme (nomTheme) VALUE ("culture général");
insert into theme (nomTheme) VALUE ("japanimation");
insert into theme (nomTheme) VALUE ("Serie");
insert into theme (nomTheme) VALUE ("Film");
insert into Utilisateur (pseudo, mail, motDePasse, estAdmin) VALUES ("root", "root@gmail.com", "Toto", 1);


insert into Quizz (nomQuizz, niveau, idUser) VALUES ("Quiz Marvel", 1, 1);
/* Quizz Marvel */
insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp, idQuizz)
VALUES ("Dans quelle film Marvel apparait Whiplash ?",
	"Jutice League",
	"Iron man",
	"Iron man 2",
	"Armageddon",
	"c", 10, 1);


insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp, idQuizz)
VALUES ("Que veut Thanos ?",
	"Exterminer la motié de l'univers",
	"Faire une paella géante",
	"Conquerir le MONDE",
	"Enlever la princesse peach", "a", 5, 1);

insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp, idQuizz)
VALUES ("Pourquoi veut-il faire ça ?",
	"Pour conquérir le coeur de la Mort",
	"Parce que !",
	"Pour sauver l'autre motié du manque de ressource",
	"Pour devenir le plus fort de l'univers", "ac", 10, 1);

insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp, idQuizz)
values ("Dans quelle film apparait Malekith ?",
	"Thor",
	"Thor : le monde des tenebres",
	"Thor : Raganarok",
	"Thor : Love and Thunder", "b", 5, 1);
insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp, idQuizz)
values ("Dans quelle pays Tony Stark a t-il été enlevé ?",
	"Iran",
	"Afghanistan",
	"Irak",
	"Syrie", "b", 10, 1);

insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp, idQuizz)
values ("Qui apparait à lors de la scene post-credit d'Iron man ",
	"Thanos",
	"Nick Furry",
	"Captain America",
	"Tony stark", "b", 5, 1);

insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp, idQuizz)
VALUES ("De quoi parle t-il ?",
	"De Thanos",
	"De son four non éteint",
	"De l'initiative Avengers",
	"De Captain Marvel", "c", 5, 1);

insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp, idQuizz)
VALUES ("Qu'es ce que la TVA ?",
	"Taxe sur la Valeur Ajoutée",
    "Time Variance Authority",
    "Time Value Allow",
    "Toto Va en Auto", "b", 5, 1);

insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp, idQuizz)
VALUES ("Que fait-elle ?",
	"Elle vérifie le bon payement de la TVA",
    "Elle voyage dans l'espace temps pour sauver les gens",
    "Elle voyage dans le temps pour tuer les variants ",
    "Elle préserve la sainte ligne temporel", "cd", 5, 1);

insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp, idQuizz)
VALUES ("De quelle pierre de l'infini était en possetion Loki dans Avengers ?",
	"La Pierre de l'âme",
    "La pierre de l'esprit",
    "La pierre de l'espace",
    "La pierre du pouvoir", "bc", 5, 1);








/* Quizz Linux */
insert into Quizz (nomQuizz, niveau, idUser) VALUES ("Quizz Ubuntu", 2, 1);

insert into QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp, idQuizz)
VALUES ("Avec quelle commande peut-on trouver un String dans plusieurs fichers ?",
	"find", "grep -r","search", "grep", "b", 10, 2),

    ("Avec quelle commande peut on se explorer les repertoires",
	"cd", "pwd", "dc", "cat", "a", 5, 2),

    ("Avec quelle commande peut on trouver l'emplacement d'un fichier ?",
	"find", "locate", "detect", "spot", "ab", 5, 2),

    ("Avec quelle commande peut on gérer les droits d'un fichier",
	"chmod", "chown", "chrgt", "chcl", "ab", 10, 2),

    ("Quelle commande peut-on utiliser pour s'aider ?",
	"aid", "help"," man", "use","c", 5, 2),

	("En quelle année a ete cree linux ?",
    "1988", "1989", "1990", "1991", "d", 5, 2),

    ("Qu'est que la création de linux a popularisé ?", "Le logiciel libre", "le logiciel par abonnement", "le logiciel payant", "abandogiciel", "a", 5, 2)

    ("le point designe", "un caractère générique", "le dossier courant", "le dossier parent", "la racine", "c", 5, 2),

    ("le ~ designe", "un caractère générique", "le dossier courant", "le dossier personnel", "la racine", "c", 5, 2));
