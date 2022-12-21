-- phpMyAdmin SQL Dump
-- version 5.1.1deb3+bionic1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 16 déc. 2022 à 13:02
-- Version du serveur : 5.7.40
-- Version de PHP : 7.2.24-0ubuntu0.18.04.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dutinfopw201634`
--

-- --------------------------------------------------------

--
-- Structure de la table `QCM`
--

CREATE TABLE `QCM` (
  `idQCM` bigint(20) UNSIGNED NOT NULL,
  `Question` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `reponse1` mediumtext COLLATE utf8_unicode_ci,
  `reponse2` mediumtext COLLATE utf8_unicode_ci,
  `reponse3` mediumtext COLLATE utf8_unicode_ci,
  `reponse4` mediumtext COLLATE utf8_unicode_ci,
  `ReponseVrai` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `xp` int(11) NOT NULL,
  `piece` int(11) NOT NULL DEFAULT '0',
  `idQuizz` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `QCM`
--

INSERT INTO `QCM` (`idQCM`, `Question`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `ReponseVrai`, `xp`, `piece`, `idQuizz`) VALUES
(1, 'Dans quelle film Marvel apparait Whiplash ?', 'Jutice League', 'Iron man', 'Iron man 2', 'Armageddon', 'c', 10, 0, 1),
(2, 'Que veut Thanos ?', 'Exterminer la motié de l\'univers', 'Faire une paella géante', 'Conquerir le MONDE', 'Enlever la princesse peach', 'a', 5, 0, 1),
(3, 'Pourquoi veut-il faire ça ?', 'Pour conquérir le coeur de la Mort', 'Parce que !', 'Pour sauver l\'autre motié du manque de ressource', 'Pour devenir le plus fort de l\'univers', 'ac', 10, 0, 1),
(4, 'Dans quelle film apparait Malekith ?', 'Thor', 'Thor : le monde des tenebres', 'Thor : Raganarok', 'Thor : Love and Thunder', 'b', 5, 0, 1),
(5, 'Dans quelle pays Tony Stark a t-il été enlevé ?', 'Iran', 'Afghanistan', 'Irak', 'Syrie', 'b', 10, 0, 1),
(6, 'Qui apparait à lors de la scene post-credit d\'Iron man ', 'Thanos', 'Nick Furry', 'Captain America', 'Tony stark', 'b', 5, 0, 1),
(7, 'De quoi parle t-il ?', 'De Thanos', 'De son four non éteint', 'De l\'initiative Avengers', 'De Captain Marvel', 'c', 5, 0, 1),
(8, 'Qu\'es ce que la TVA ?', 'Taxe sur la Valeur Ajoutée', 'Time Variance Authority', 'Time Value Allow', 'Toto Va en Auto', 'b', 5, 0, 1),
(9, 'Que fait-elle ?', 'Elle vérifie le bon payement de la TVA', 'Elle voyage dans l\'espace temps pour sauver les gens', 'Elle voyage dans le temps pour tuer les variants ', 'Elle préserve la sainte ligne temporel', 'cd', 5, 0, 1),
(10, 'De quelle pierre de l\'infini était en possetion Loki dans Avengers ?', 'La Pierre de l\'âme', 'La pierre de l\'esprit', 'La pierre de l\'espace', 'La pierre du pouvoir', 'bc', 5, 0, 1),
(11, 'Avec quelle commande peut-on trouver un String dans plusieurs fichers ?', 'find', 'grep -r', 'search', 'grep', '2', 10, 0, 2),
(12, 'Avec quelle commande peut on se explorer les repertoires', '34', 'pwd', 'cd', 'cat', '1', 5, 0, 2),
(13, 'Avec quelle commande peut on trouver l\'emplacement d\'un fichier ?', 'find', 'locate', 'detect', 'spot', '12', 5, 0, 2),
(14, 'Avec quelle commande peut on gérer les droits d\'un fichier', 'chmod', 'chown', 'chrgt', 'chcl', '12', 10, 0, 2),
(15, 'Quelle commande peut-on utiliser pour s\'aider ?', 'aid', 'help', ' man', 'use', '3', 5, 0, 2),
(16, 'En quelle année a ete cree linux ?', '1988', '1989', '1990', '1991', '4', 5, 0, 2),
(17, 'Qu\'est que la création de linux a popularisé ?', 'Le logiciel libre', 'le logiciel par abonnement', 'le logiciel payant', 'abandogiciel', '1', 5, 0, 2),
(18, 'le point designe', 'un caractère générique', 'le dossier courant', 'le dossier parent', 'la racine', '3', 5, 0, 2),
(19, 'le ~ designe', 'un caractère générique', 'le dossier courant', 'le dossier personnel', 'la racine', '3', 5, 0, 2),
(20, 'Quel est le rêve de zoro ?', '1998', '1999', '1997', '2000', '3', 50, 20, 3),
(21, 'Combien existe-il de fruits du démon ?\r\n', '500', '5207', '3000', '4789', '2', 75, 30, 3),
(22, 'Quel fruit du démon a mangé Monkey D. Luffy ?\r\n', 'Gomu Gomu no Mi', 'Ito Ito no Mi', 'Doru Doru no Mi', 'Ushi Ushi no Mi', '1', 25, 10, 3),
(23, 'Quand a eu lieu la première diffusion de l\'animé one piece ?\r\n', '20 octobre 2000', '20 octobre 2001', '20 octobre 1999', '20 octobre 1998', '3', 50, 20, 3),
(24, 'Qui était le roi des pirates ?\r\n', 'Gol D. Roger', 'Barbe Blanche', 'Shanks le Roux', 'Akainu', '3', 50, 21, 3),
(25, 'Qui sont les frères de Monkey D. Luffy ?\r\n', 'Portgas D. Ace et Rononoa Zoro', 'Baggy et Portgas D. Ace', 'Trafaldag Law et X Drake', 'Portgas D. Ace et Sabo', '4', 50, 20, 3),
(26, 'Qui est le père de Sanji ?\r\n', 'Vinsmoke Niji', 'Vinsmoke Yonji', 'Vinsmoke Judge', 'Vinsmoke Ichiji', '3', 42, 20, 3),
(27, 'Quel est le rêve de Monkey D. Luffy ?\r\n', 'visiter all blue', 'devenir le roi des pirates', 'cartographier le monde entier', 'découvrir la vérité sur le siècle oublié', '2', 2, 20, 3),
(28, 'Quel est le fruit du démon de Crocodile ?\r\n', 'Yami Yami no Mi', 'Gol Gol no Mi', 'Suna Suna no Mi', 'Mera Mera no Mi', '3', 12, 10, 3),
(29, 'Qui est le fils de Kaidô ?\r\n', 'O-Tama', 'Yamato', 'Flapper', 'Pedro', '2', 58, 12, 3),
(30, 'Qui est la fille de Shanks le Roux ?\r\n', 'Uta', 'Charlotte Flampe', 'Carrot', 'Viola', '1', 45, 20, 4),
(31, 'Qui était le second du roi des pirates ?\r\n', 'Scopper Gaban', 'Shanks le Roux', 'Silvers Rayleigh', 'Crocus', '3', 50, 25, 4),
(32, 'Quel est le rêve de Brook ?\r\n', 'vaincre Mihawk et devenir le meilleur épéistes ', 'découvrir la vérité sur le siècle oublié ', 'que les hommes poissons vivent en paix avec les humains', 'retrouver laboon', '4', 75, 50, 4),
(33, 'Quel est le fruit du démon de Baggy ?\r\n', 'Ito Ito no Mi', 'Bara Bara no Mi', 'Ope Ope no Mi', 'Kage Kage no Mi', '2', 25, 15, 4),
(34, 'Qui a donné envie à Luffy de devenir pirate ?\r\n', 'Ben Beckman', 'Gold Roger', 'Lucky Roux', 'Shanks le Roux', '4', 45, 12, 4),
(35, 'Quel est le premier personnage à rejoindre l’équipage de Luffy ?\r\n', 'Usopp', 'Sanji', 'Nami', 'Roronoa Zoro', '4', 75, 100, 4),
(36, 'Quel est le rêve de Trafalgar Law ?\r\n', 'découvrir la signification du D.', 'devenir le roi des pirates', 'faire le tour du monde', 'vaincre Mihawk et devenir le meilleur épéistes', '1', 45, 20, 4),
(37, 'Qui est Miss All Sunday ?\r\n', 'Nami', 'Nico Robin', 'Nefertari Vivi', 'Paula', '2', 45, 25, 4),
(38, 'Qui est Mister 3 ?\r\n', 'Galdino', 'Igaram', 'Hiluluk', 'Chess', '1', 50, 25, 4),
(39, 'Quel est le fruit du démon de Gecko Moria ?\r\n', 'Yomi Yomi no Mi', 'Doru Doru no Mi', 'Sube Sube no Mi', 'Kage Kage no Mi', '4', 45, 20, 5),
(40, 'Quel est le fruit du démon de Nico Robin ?\r\n', 'Hana Hana no Mi', 'Awa Awa no Mi', 'Yomi Yomi no Mi', 'Sube Sube no Mi', '1', 60, 40, 5),
(41, 'Quel est le fruit du démon de Don Quichotte Doflamingo ?\r\n', 'Gomu Gomu no Mi', 'Ito Ito no Mi', 'Ope Ope no Mi', 'Baku Baku no Mi', '2', 100, 75, 5),
(42, 'Quel est le fruit du démon de Tony Tony Chopper ?\r\n', 'Ito Ito no Mi', 'Hito Hito no Mi', 'Sara Sara no Mi', 'Mochi Mochi no Mi', '2', 100, 75, 5),
(43, 'Quel est le fruit du démon de Trafalgar D. Law ?\r\n', 'Fude Fude no Mi', 'Kilo Kilo no Mi', 'Jiki Jiki no Mi', 'Ope Ope no Mi', '4', 100, 75, 5),
(44, 'Quel est le fruit du démon de Eutass Kid ?\r\n', 'Mochi Mochi no Mi', 'Ushi Ushi no Mi', 'Jiki Jiki no Mi', 'Uo Uo no Mi', '3', 150, 100, 5),
(45, 'Quel est le fruit du démon de Yamato ?\r\n', 'Inu Inu no Mi', 'Uo Uo no Mi', 'Hebi Hebi no Mi', 'Ushi Ushi no Mi', '1', 150, 100, 5),
(46, 'Quel est le fruit du démon de Smoker ?\r\n', 'Mera Mera no Mi', 'Yami Yami no Mi', 'Moku Moku no Mi', 'Suna Suna no Mi', '3', 100, 75, 5),
(47, 'Quel est le fruit du démon d’Uta ?\r\n', 'Gol Gol no Mi', 'Uta Uta no Mi', 'Bijo Bijo no Mi', 'Gasha Gasha no Mi', '2', 50, 25, 5),
(48, 'Quel est le fruit du démon de Marshall D. Teach ?\r\n', 'Mera Mera no Mi', 'Yami Yami no Mi', 'Baku baku  no Mi', 'Fude Fude no Mi', '2', 100, 50, 5),
(49, 'Quel est  le rêve de Zoro ?\r\n', 'devenir le roi des pirates', 'devenir un guerrier valeureux', 'vaincre Mihawk et devenir le meilleur épéistes', 'découvrir la vérité sur le siècle oublié', '3', 50, 20, 6),
(50, 'Quel est le rêve de Robin ?\r\n', 'retrouver laboon', 'trouver le one piece', 'découvrir la vérité sur le siècle oublié', 'découvrir le remède à toute les maladie', '3', 50, 20, 6),
(51, 'Quel est le rêve de Chopper ?\r\n', 'découvrir All Blue ', 'découvrir le remède à toute les maladie', 'cartographier le monde entier', 'retrouver laboon', '2', 50, 20, 6),
(52, 'D’où vient Trafalgar Law ?\r\n', 'Ville Blanche', 'Royaume de Flevance', 'Ohara', 'Marie-Joie', '1', 75, 45, 6),
(53, 'Qu’est ce que Laboon attend au Phare du Cap des jumeaux ?\r\n', 'la venue du roi des pirates', 'le retour des pirates du Rumbar', 'que d’autre baleine la rejoigne', 'la marine', '2', 45, 15, 6),
(54, 'Quelle promesse Luffy fait à Laboon ?\r\n', 'de retrouver ses amis', 'de retrouver sa mère', 'de revenir la voir', 'de venger ses amis', '3', 45, 20, 6),
(55, 'Qu’est que la marine ?\r\n', 'une société secrète', 'une secte', 'la force militaire principale du Gouvernement Mondial', 'un pays', '3', 55, 45, 6),
(56, 'Après l\'ellipse, qui sont les personnages qui ont intégré le rend des grands corsaires ?\r\n', 'Trafalgar Law, shanks,Coby', 'Baggy, Mihawk, Bon Clay', 'Crocodile, Marco, Edward Newgate', 'Trafalgar, Baggy, edward Weeble', '4', 75, 50, 6),
(57, 'Comment Marshall D. Teach est devenu un grand corsaire ?\r\n', 'en battant crocodile', 'en demandant à la marine', 'en capturant  Portgas D. Ace', 'en tuant Edward Newgate', '3', 45, 25, 6),
(58, 'Combien y a-t-il eu de grands corsaires au total ?\r\n', '7', '9', '14', '11', '4', 75, 59, 6),
(59, 'Combien y a -t-il de saison dans friends ?\r\n', '8', '9', '10', '11', '3', 50, 20, 7),
(60, 'Combien y a-t-il d\'épisodes dans friends ?\r\n', '210', '178', '289', '236', '4', 45, 15, 7),
(61, 'Dans quel lieu se trouvent les personnages dans la toute première scène du premier épisode de Friends ?\r\n', 'L’appartement de Monica', 'L’appartement de Chandler et Joey', 'Le Central Perk', 'L’appartement de Ross', '3', 45, 36, 7),
(62, 'Comment se nomme le café où les personnages ont leurs habitudes ?\r\n', 'Le Central Park', 'Le Central Perk', 'Le Central Café', 'Le Café Central', '2', 52, 42, 7),
(63, 'Qui sont Jack et Judy ?\r\n', 'Les parents de Joey', 'Les parents de Ross et Monica\r\n', 'Les parents de Chandler\r\n', 'Les parents de Rachel\r\n', '2', 45, 20, 7),
(64, 'Comment se nomme le gérant du Central Perk ?\r\n', 'Gary', 'jerry', 'gunther', 'il n’a pas de nom', '3', 42, 10, 7),
(65, 'De quel type de véhicule Phoebe hérite-t-elle de sa grand-mère ?\r\n', 'une voiture de course\r\n', 'un corbillard\r\n', 'un van\r\n', 'un taxi\r\n', '4', 45, 7, 7),
(66, 'Lequel des personnages de la série a une sœur jumelle ?\r\n', 'Phoebe', 'Monica', 'Rachel', 'Carol', '1', 45, 12, 7),
(67, 'Quel couple tente désespérément d’adopter un enfant ?\r\n', 'Monica et Chandler', 'Ross et Rachel\r\n', 'Phoebe et Mike', 'Ross et Carol\r\n', '1', 23, 10, 7),
(68, 'Quel personnage pense avoir des talents de guitariste et de chant ?\r\n', 'Ross', 'Phoebe\r\n', 'Monica\r\n', 'Chandler', '2', 75, 46, 7),
(69, 'Comment se nomme l’ex-petit ami de Monica, dont Chandler est très jaloux ?\r\n', 'Roger', 'Régis', 'Raymond', 'Richard', '4', 85, 50, 8),
(70, 'Combien de fois Ross a-t-il divorcé ?\r\n', '1', '2', '3', '4', '3', 60, 30, 8),
(71, 'Quel problème a complexé Monica lors de son adolescence ?\r\n', 'Sa puberté tardive\r\n', 'elle était obèse\r\n', 'elle est myope\r\n', 'elle était très timide\r\n', '2', 45, 15, 8),
(72, 'De qui Gunther est-il éperdument amoureux ?\r\n', 'Rachel', 'Phoebe', 'Monica', 'Carol', '1', 15, 4, 8),
(73, 'Quel personnage fait son apparition dans la série en robe de mariée ?\r\n', 'Rachel', 'Phoebe', 'Monica', 'Carol', '1', 45, 23, 8),
(74, 'Ross a combien d’enfants ?\r\n', '1', '2', '3', '4', '2', 45, 20, 8),
(75, 'quand a été diffusé pour la première fois friends ?\r\n', '22 septembre 1993\r\n', '22 septembre 1994\r\n', '22 septembre 1995\r\n', '22 septembre 1996\r\n', '2', 45, 25, 8),
(76, 'A quoi Ross est-il allergique ?\r\n', 'Beurre de cacahuète, lait et oeuf\r\n', 'Kiwi, homard et cacahuètes\r\n', 'Lait, kiwi, beurre de cacahuète\r\n', 'Lait, homard, oeuf\r\n', '2', 45, 36, 8),
(77, 'Quel est le deuxième prénom de Ross ?\r\n', 'Muriel', 'Grant', 'Eustace', 'Richard\r\n', '3', 85, 42, 8),
(78, 'Le ou laquelle des six friends a été embrassé(e) par tous les autres ?\r\n', 'Phoebe', 'Chandler', 'Rachel', 'Joey', '3', 45, 25, 8),
(79, 'Dans quelle film Marvel apparait Whiplash ?', 'Jutice League', 'Iron man', 'Iron man 2', 'Armageddon', 'c', 10, 0, 1),
(80, 'Que veut Thanos ?', 'Exterminer la motié de l\'univers', 'Faire une paella géante', 'Conquerir le MONDE', 'Enlever la princesse peach', 'a', 5, 0, 1),
(81, 'Pourquoi veut-il faire ça ?', 'Pour conquérir le coeur de la Mort', 'Parce que !', 'Pour sauver l\'autre motié du manque de ressource', 'Pour devenir le plus fort de l\'univers', 'ac', 10, 0, 1),
(82, 'Dans quelle film apparait Malekith ?', 'Thor', 'Thor : le monde des tenebres', 'Thor : Raganarok', 'Thor : Love and Thunder', 'b', 5, 0, 1),
(83, 'Dans quelle pays Tony Stark a t-il été enlevé ?', 'Iran', 'Afghanistan', 'Irak', 'Syrie', 'b', 10, 0, 1),
(84, 'Qui apparait à lors de la scene post-credit d\'Iron man ', 'Thanos', 'Nick Furry', 'Captain America', 'Tony stark', 'b', 5, 0, 1),
(85, 'De quoi parle t-il ?', 'De Thanos', 'De son four non éteint', 'De l\'initiative Avengers', 'De Captain Marvel', 'c', 5, 0, 1),
(86, 'Qu\'es ce que la TVA ?', 'Taxe sur la Valeur Ajoutée', 'Time Variance Authority', 'Time Value Allow', 'Toto Va en Auto', 'b', 5, 0, 1),
(87, 'Que fait-elle ?', 'Elle vérifie le bon payement de la TVA', 'Elle voyage dans l\'espace temps pour sauver les gens', 'Elle voyage dans le temps pour tuer les variants ', 'Elle préserve la sainte ligne temporel', 'cd', 5, 0, 1),
(88, 'De quelle pierre de l\'infini était en possetion Loki dans Avengers ?', 'La Pierre de l\'âme', 'La pierre de l\'esprit', 'La pierre de l\'espace', 'La pierre du pouvoir', 'bc', 5, 0, 1),
(89, 'Avec quelle commande peut-on trouver un String dans plusieurs fichers ?', 'find', 'grep -r', 'search', 'grep', '2', 10, 0, 2),
(90, 'Avec quelle commande peut on se explorer les repertoires', '34', 'pwd', 'cd', 'cat', '1', 5, 0, 2),
(91, 'Avec quelle commande peut on trouver l\'emplacement d\'un fichier ?', 'find', 'locate', 'detect', 'spot', '12', 5, 0, 2),
(92, 'Avec quelle commande peut on gérer les droits d\'un fichier', 'chmod', 'chown', 'chrgt', 'chcl', '12', 10, 0, 2),
(93, 'Quelle commande peut-on utiliser pour s\'aider ?', 'aid', 'help', ' man', 'use', '3', 5, 0, 2),
(94, 'En quelle année a ete cree linux ?', '1988', '1989', '1990', '1991', '4', 5, 0, 2),
(95, 'Qui est le père de Sanji ?\r\n', 'Vinsmoke Niji', 'Vinsmoke Yonji', 'Vinsmoke Judge', 'Vinsmoke Ichiji', '3', 42, 20, 3),
(96, 'Quel est le rêve de Monkey D. Luffy ?\r\n', 'visiter all blue', 'devenir le roi des pirates', 'cartographier le monde entier', 'découvrir la vérité sur le siècle oublié', '2', 2, 20, 3),
(97, 'Quel est le fruit du démon de Crocodile ?\r\n', 'Yami Yami no Mi', 'Gol Gol no Mi', 'Suna Suna no Mi', 'Mera Mera no Mi', '3', 12, 10, 3),
(98, 'Qui est le fils de Kaidô ?\r\n', 'O-Tama', 'Yamato', 'Flapper', 'Pedro', '2', 58, 12, 3),
(99, 'Qui est la fille de Shanks le Roux ?\r\n', 'Uta', 'Charlotte Flampe', 'Carrot', 'Viola', '1', 45, 20, 4),
(100, 'Qui était le second du roi des pirates ?\r\n', 'Scopper Gaban', 'Shanks le Roux', 'Silvers Rayleigh', 'Crocus', '3', 50, 25, 4),
(101, 'Quel est le rêve de Brook ?\r\n', 'vaincre Mihawk et devenir le meilleur épéistes ', 'découvrir la vérité sur le siècle oublié ', 'que les hommes poissons vivent en paix avec les humains', 'retrouver laboon', '4', 75, 50, 4),
(102, 'Quel est le fruit du démon de Baggy ?\r\n', 'Ito Ito no Mi', 'Bara Bara no Mi', 'Ope Ope no Mi', 'Kage Kage no Mi', '2', 25, 15, 4),
(103, 'Qui a donné envie à Luffy de devenir pirate ?\r\n', 'Ben Beckman', 'Gold Roger', 'Lucky Roux', 'Shanks le Roux', '4', 45, 12, 4),
(104, 'Quel est le premier personnage à rejoindre l’équipage de Luffy ?\r\n', 'Usopp', 'Sanji', 'Nami', 'Roronoa Zoro', '4', 75, 100, 4),
(105, 'Quel est le rêve de Trafalgar Law ?\r\n', 'découvrir la signification du D.', 'devenir le roi des pirates', 'faire le tour du monde', 'vaincre Mihawk et devenir le meilleur épéistes', '1', 45, 20, 4),
(106, 'Qui est Miss All Sunday ?\r\n', 'Nami', 'Nico Robin', 'Nefertari Vivi', 'Paula', '2', 45, 25, 4),
(107, 'Qui est Mister 3 ?\r\n', 'Galdino', 'Igaram', 'Hiluluk', 'Chess', '1', 50, 25, 4),
(108, 'Quel est le fruit du démon de Gecko Moria ?\r\n', 'Yomi Yomi no Mi', 'Doru Doru no Mi', 'Sube Sube no Mi', 'Kage Kage no Mi', '4', 45, 20, 5),
(109, 'Quel est le fruit du démon de Nico Robin ?\r\n', 'Hana Hana no Mi', 'Awa Awa no Mi', 'Yomi Yomi no Mi', 'Sube Sube no Mi', '1', 60, 40, 5),
(110, 'Quel est le fruit du démon de Don Quichotte Doflamingo ?\r\n', 'Gomu Gomu no Mi', 'Ito Ito no Mi', 'Ope Ope no Mi', 'Baku Baku no Mi', '2', 100, 75, 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `QCM`
--
ALTER TABLE `QCM`
  ADD PRIMARY KEY (`idQCM`),
  ADD UNIQUE KEY `idQCM` (`idQCM`),
  ADD KEY `idQuizz` (`idQuizz`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `QCM`
--
ALTER TABLE `QCM`
  MODIFY `idQCM` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `QCM`
--
ALTER TABLE `QCM`
  ADD CONSTRAINT `QCM_ibfk_1` FOREIGN KEY (`idQuizz`) REFERENCES `Quizz` (`idQuizz`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
