-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 06 oct. 2022 à 13:59
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fil_rouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `username`, `mdp`, `prenom`, `nom`, `admin`) VALUES
(1, 'ersiiyn', '$2y$10$BuaEkOPsGmL7GnUarHxgHebWjBNsYBTZu91QmgDMGZ2nN2/NppdAG', 'kevin', 'bil', 'ADMIN');

-- --------------------------------------------------------

--
-- Structure de la table `bloc`
--

DROP TABLE IF EXISTS `bloc`;
CREATE TABLE IF NOT EXISTS `bloc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `id_page` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_page_bloc` (`id_page`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bloc`
--

INSERT INTO `bloc` (`id`, `nom`, `id_page`) VALUES
(1, 'slider', 1),
(2, 'fastcasual', 1),
(3, 'pasionne', 1),
(4, 'entree', 1),
(5, 'plats', 1),
(6, 'desserts', 1),
(7, 'nous traitons', 1),
(8, 'nous suivre', 1),
(9, 'adresse', 1),
(10, 'maps', 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_categorie`) VALUES
(1, 'Entrées'),
(2, 'Plats'),
(3, 'Desserts'),
(4, 'Boissons');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(255) NOT NULL,
  `prenom_client` varchar(255) NOT NULL,
  `nom_utilisateur` varchar(255) NOT NULL,
  `mail_client` varchar(255) NOT NULL,
  `numero_client` varchar(255) NOT NULL,
  `mdp_client` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contacter`
--

DROP TABLE IF EXISTS `contacter`;
CREATE TABLE IF NOT EXISTS `contacter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_contact` varchar(150) NOT NULL,
  `prenom_contact` varchar(150) NOT NULL,
  `mail_contact` varchar(255) NOT NULL,
  `date_contact` int(20) NOT NULL,
  `objet_contact` varchar(255) NOT NULL,
  `message_contact` varchar(500) NOT NULL,
  `statut_contact` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

DROP TABLE IF EXISTS `devis`;
CREATE TABLE IF NOT EXISTS `devis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prestation_devis` varchar(255) NOT NULL,
  `personne_devis` int(100) NOT NULL,
  `message_devis` varchar(400) NOT NULL,
  `id_client` int(11) NOT NULL,
  `dateEvement_devis` int(30) NOT NULL,
  `dateJour_devis` int(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_client_devis` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `element`
--

DROP TABLE IF EXISTS `element`;
CREATE TABLE IF NOT EXISTS `element` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_bloc` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `contenu` varchar(400) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_bloc_element` (`id_bloc`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `element`
--

INSERT INTO `element` (`id`, `id_bloc`, `nom`, `contenu`) VALUES
(1, 1, 'slider 1 ', './img/Restaurant.png'),
(2, 2, 'fastcasual titre ', '#FASTCASUALTURK'),
(3, 2, 'fastcasual texte', 'Chez MALO, nous avons pris l\'engagement rapide et décontracté - nous vous servirons des aliments frais et cuits en moins de 10 minutes.'),
(4, 2, 'fastcasual image', './img/havuc_s.png'),
(5, 3, 'passionne image', './img/story-experienceLarge.png'),
(6, 3, 'passionne titre', 'Passionné par la divérsité culinaire mondiale ? '),
(7, 3, 'passionne texte ', 'Que diriez-vous de partir en voyage avec la découverte d’un petit déjeuner Turc qui vous mettra du gout à la bouche avec ses délicieuses et multiples saveurs ?'),
(8, 4, 'image entree', './img/yogurt.jpg'),
(9, 4, 'titre entree', 'Entrées'),
(10, 4, 'texte entree', 'En tant que spécialiste de l\'exportation avec plus d\'un groupe alimentaire'),
(11, 4, 'lien entree', 'index.php?page=7&categorie=1'),
(12, 5, 'image plats', './img/wrap.png'),
(13, 5, 'titre plats', 'Plâts'),
(14, 5, 'texte plats', 'En tant que spécialiste de l\'exportation avec plus d\'un groupe alimentaire'),
(15, 5, 'lien plats', 'index.php?page=7&categorie=2'),
(16, 6, 'image desserts', './img/icecream.jpg'),
(17, 6, 'titre desserts', 'Desserts'),
(18, 6, 'texte desserts', 'En tant que spécialiste de l\'exportation avec plus d\'un groupe alimentaire'),
(19, 6, 'lien dessert', 'index.php?page=7&categorie=3'),
(24, 7, 'titre traitons', 'Nous traitons'),
(25, 7, 'texte traitons', 'Pour un événement, un anniversaire, une réunion ou pour une rencontre familiale, choisissez d’offrir à vos invités un menu sur mesure composé de succulents mets chinois. Nous mettons à votre disposition une équipe de serveurs et serveuses ainsi que de la vaisselle jetable.'),
(26, 7, 'lien traitons', 'index.php?page=5'),
(27, 7, 'image traitons', './img/chefcook.png'),
(28, 8, 'lien facebook nous suivre', 'https://www.facebook.com/madotoronto'),
(29, 8, 'lien insta nous suivre', 'https://www.instagram.com/madotoronto/'),
(30, 9, 'adresse', '6 Place Saint-Exupéry\n91700 Sainte Geneviève des Bois<br>'),
(31, 9, 'numero adresse', '01 60 16 13 54'),
(32, 9, 'horaire adresse', 'Lundi - Samedi: 10:00 - 23:00\nDimanche: 10:00 - 22:00'),
(33, 2, 'texte fastcasual 2', 'Et nous le ferons avec un menu très ciblé, servant une cuisine - turque.'),
(34, 3, 'passionnee texte 2', 'Partons sans plus tarder découvrir le « kahvalti », petit déjeuner traditionnel turc chez MALO.');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_menu` varchar(255) NOT NULL,
  `description_menu` varchar(255) NOT NULL,
  `prix_menu` float NOT NULL,
  `photo_menu` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `menu_produits`
--

DROP TABLE IF EXISTS `menu_produits`;
CREATE TABLE IF NOT EXISTS `menu_produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produits` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_produit_menuProduits` (`id_produits`),
  KEY `fk_menu_menuProduits` (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `nom`) VALUES
(1, 'Accueil'),
(11, 'Notre histoire ');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(255) NOT NULL,
  `description_produit` varchar(255) NOT NULL,
  `prix_produit` float NOT NULL,
  `photo_produit` varchar(255) NOT NULL,
  `id_sous_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sousCategorie_produits` (`id_sous_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom_produit`, `description_produit`, `prix_produit`, `photo_produit`, `id_sous_categorie`) VALUES
(1, 'Salade de saumon', 'Salade mixte, tomates cerises, poivrons mixtes, cornichons, slamon grillé, câpres, citron et huile.', 14, './img/salade_saumon.jpg', 1),
(2, 'Salade Ahirdagi', 'Mesclun, tomate, concombres, persil, menthe, poivrons, grenade, fromage feta, jus acide commigrate, huile, citron et tomates cerises.', 15, './img/salade_ahirdagi.jpg', 1),
(3, 'Salade César au Poulet Grillé', 'Laitue, vinaigrette, poulet, crouton, tomate cerise, parmesan.', 15, './img/salade_ceaser.jpg', 1),
(4, 'Salade de boeuf', 'Bœuf, mesclun, champignons, poivrons mélangés, maïs, sauce soya, tomates cerises, huile d\'olive et citron.', 16, './img/salade-boeuf.jpg', 1),
(7, 'Yogurt ', 'Le yoghurt également orthographié yaourt est un aliment produit par fermentation bactérienne du lait. Les bactéries utilisées pour fabriquer le yogourt sont appelées cultures de yogourt.', 2.99, './img/yogurt.jpg', 1),
(8, 'Apéritif/Plateau Mezze', 'Deux morceaux d\'icli kofte, tzatziki, houmous et salade cuillère.', 15, './img/aperitif.jpg', 1),
(9, 'Pilaf', 'Le riz pilaf est un plat de riz préparé avec du sel et du beurre.', 3.5, './img/rit.jpg', 2),
(10, 'Frites', 'Pommes de terre frites dans de l\'huile de cuisson chaude.', 3.2, './img/frite.jpg', 2),
(26, 'Begendi kofte', 'Beğendi kofte est une boulette de viande de bœuf haché servie avec tomate grillée, poivron vert sur aubergine \"beğendi\" (aubergine crémeuse).', 13, './img/begendi_kofte.jpg', 14),
(27, 'Iskender', 'Bœuf iskender mariné dans une sauce iskender traditionnelle. Servi avec poivron rôti, tomate rôtie et yaourt sur un lit de pain, ce plat vous comblera.', 13, './img/Iskender_boeuf.jpg', 14),
(28, 'Iskender Kofte', 'Iskdender kofte est mariné dans une sauce iskender traditionnelle. Servi avec poivron rôti, tomate rôtie et yaourt sur un lit de pain, ce plat vous comblera.', 13, './img/iskender_Kofte.jpg', 14),
(29, 'Kavurma', 'Bœuf, poivrons mélangés, oignons, tomates, pois chiches, riz de blé et pain.', 14, './img/kavurma.jpg', 14),
(30, 'Kofte', 'Boulettes de boucherie grillées, riz, cornichons mélangés, tomates grillées, poivrons grillés et pain lavash.', 11.99, './img/kofte.jpg', 14),
(31, 'Kebab celtique', 'Pommes de terre finement tranchées, bœuf, poivron grillé, tomate grillée, yogourt, sauce tomate, beurre et épices.', 16, './img/kebab_celtique.jpg', 14),
(32, 'Manti croustillant', 'Raviolis turcs frits farcis de viande hachée, yaourt, sauce tomate, menthe séchée et sumak.', 13, './img/manti_crous.jpg', 14),
(33, 'Manti', 'Raviolis turcs farcis de viande hachée, yaourt, sauce tomate, menthe séchée et sumak.', 13, './img/manti.jpg', 14),
(34, 'Begendi Kebab', 'Bœuf sauté avec oignon, tomate, poivron vert sur des aubergines \"beğendi\" (aubergines crémeuses). Ce plat est servi avec des tomates grillées et du poivron grillé.', 16, './img/begendi_kebab.jpeg', 14),
(35, 'Poulet Cajun', 'Poulet grillé sauté aux champignons, crème et servi avec riz de blé spécial et pommes de terre grelots.', 14, './img/poulet_cajun.jpg', 14),
(36, 'Poulet celtique', 'Un poulet magnifiquement mariné avec notre sauce celtique servi sur un lit de frites et yogourt en accompagnement.', 15, './img/poulet_celtique.jpg', 14),
(37, 'Poulet au curry', 'Curry de poulet délicieusement mariné avec une sauce au curry et sauté avec des poivrons et des champignons. Ce plat est servi avec du riz et une salade de mesclun et de tomates cerises en accompagnement.', 14, './img/poulet_curry.jpeg', 14),
(38, 'Schnitzel au poulet', 'Poitrine de poulet panée, mesclun, frites, huile et citron.', 12.5, './img/schnitzel_poulet.jpg', 14),
(39, 'Brochettes de poulet', 'Chiche de poulet, tomates grillées, poivrons grillés, riz, frites et pain lavash.', 13.4, './img/brochette_poulet.jpg', 14),
(40, 'Saumon grillé', 'Saumon grillé servi avec du chou rouge mariné maison, du romarin, des câpres, des pommes de terre grelots assaisonnées et des oignons grillés.', 17.99, './img/saumon_grille.jpeg', 14),
(41, 'Pizza au fromage', 'Sauce tomate, mozzarella, feta, thym, parmesan et roquette.', 8, './img/pizza_fromage.jpg', 15),
(42, 'Pizza Spéciale malo ', 'Sauce tomate, fromage mozzarella, sujuk, saucisse, champignons, poivrons mélangés, feuilles de roquette, parmesan et thym.', 11, './img/pizza_malo.jpg', 15),
(43, 'Pizza au poulet', 'Sauce tomate, poulet, mozzarella, oignon rouge, thym, roquette et parmesan.', 9.5, './img/pizza_poulet.jpg', 15),
(44, 'Pizza aux crevettes', 'Sauce tomate, crevettes, fromage mozzarella, oignon rouge, thym, feuilles de roquette et parmesan.', 11.99, './img/pizza_crevette.jpg', 15),
(45, 'Spagetti bolognaise', 'Spaghettis brins, sauce bolognaise à la viande hachée, sauce tomate, parmesan et tomates cerises.', 12.5, './img/spagetti.jpg', 15),
(46, 'Pâtes aux crevettes', 'Crevettes, pâtes tagliatelles, crème, champignons, sauce pesto, parmesan, sel et poivre noir.', 17.99, './img/pate_crevette.jpg', 15),
(47, 'Fettuccine Alfredo', 'Poulet, pâtes tagliatelles, crème, champignons, sauce pesto, parmesan, sel et poivre noir.', 16, './img/pate_champi.jpg', 15),
(64, 'Gozleme au fromage Kashar', 'Un pain plat farci de fromage kashar et servi avec une salade à la cuillère turque et une sauce tomate chaude sur le côté.', 7.5, './img/goz_peynir.jpg', 16),
(65, 'Gozleme au fromage Maraş', 'Un pain plat farci de fromage maraş qui est servi avec une salade à la cuillère turque et une sauce tomate chaude sur le côté.', 7.5, './img/goz_peynir.jpg', 16),
(66, 'Gozleme avec boeuf haché', 'Un pain plat farci de viande hachée servi avec une cuillère de salade et une sauce aigre sur le côté.', 8.5, './img/goz_boeuf.jpg', 16),
(67, 'Lavash de boeuf', 'Lavash de bœuf comprend du poivron rouge, de la sauce soya, du poivron vert, des champignons, de la mozzarella et du bœuf sauté dans un wrap au lavash.', 10, './img/lavash_boeuf.jpg', 16),
(68, 'Poulet Lavash', 'Lavash au poulet comprend du poivron rouge, de la sauce soya, du poivron vert, des champignons, de la mozzarella et des tranches de poulet sautées dans un wrap.', 9.5, './img/kofte_lavash.jpg', 16),
(69, 'Kofte Lavash', 'Salade mixte, persil, mayonnaise, sumac, cornichons, tomates et boulettes de viande du boucher, le tout enveloppé dans un wrap de lavash servi avec frites, salade mixte, concombres, tomates cerises, mayonnaise et sauce chili en accompagnement.', 11, './img/kofte_lavash.jpg', 16),
(70, 'Burger malo', 'Une galette de bœuf artisanale, tomate, cornichons, oignons caramélisés, fromage cheddar, ketchup, mayonnaise. Servi avec frites à part et quatre trempettes.', 12, './img/burger_malo.jpeg', 16),
(71, 'Hamburger au poulet grillé', 'Poitrine de poulet, tomate, cornichons, oignons caramélisés, fromage cheddar, ketchup, mayonnaise. Servi avec frites à part et quatre trempettes.', 12.5, './img/hamburger.jpeg', 16),
(72, 'Lavash au fromage', 'Aubergine begendi, épinards, poivrons mixtes, tomates séchées, mozzarella servi avec frites, mesclun, tomates cerises, concombres, mayonnaise et sauce chili en accompagnement.', 11.5, './img/vege_fromage.jpg', 17),
(73, 'Vegetarien lavash\r\n', 'Un wrap lavash aux champignons, poivron rouge, poivron vert, courgette poivron jaune servi avec mesclun, tomates cerises, citron, huile et concombre.', 13, './img/vegetarien_lavash.png', 17);

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

DROP TABLE IF EXISTS `sous_categorie`;
CREATE TABLE IF NOT EXISTS `sous_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_sous_categorie` varchar(100) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categorie_sousCategorie` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sous_categorie`
--

INSERT INTO `sous_categorie` (`id`, `nom_sous_categorie`, `id_categorie`) VALUES
(1, 'Entrées froides', 1),
(2, 'Entrées chaudes ', 1),
(14, 'Viandes', 2),
(15, 'Pizzas & Pâtes', 2),
(16, 'Wraps & Gozleme & Burgers', 2),
(17, 'Vegetariens', 2),
(18, 'Desserts chauds ', 3),
(19, 'Desserts froids', 3),
(20, 'Baklava', 3),
(21, 'Glaces', 3),
(22, 'Boissons froides', 4),
(23, 'Boissons chaudes', 4);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bloc`
--
ALTER TABLE `bloc`
  ADD CONSTRAINT `fk_page_bloc` FOREIGN KEY (`id_page`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `devis`
--
ALTER TABLE `devis`
  ADD CONSTRAINT `fk_client_devis` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `element`
--
ALTER TABLE `element`
  ADD CONSTRAINT `fk_bloc_element` FOREIGN KEY (`id_bloc`) REFERENCES `bloc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `menu_produits`
--
ALTER TABLE `menu_produits`
  ADD CONSTRAINT `fk_menu_menuProduits` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`),
  ADD CONSTRAINT `fk_produit_menuProduits` FOREIGN KEY (`id_produits`) REFERENCES `produits` (`id`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `fk_sousCategorie_produits` FOREIGN KEY (`id_sous_categorie`) REFERENCES `sous_categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  ADD CONSTRAINT `fk_categorie_sousCategorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
