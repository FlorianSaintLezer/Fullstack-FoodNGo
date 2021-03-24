-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 18 mars 2021 à 23:06
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `epcf2fsl`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Entrées'),
(2, 'Plats'),
(3, 'Desserts'),
(4, 'Boissons');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5F9E962AF675F31B` (`author_id`),
  KEY `IDX_5F9E962A59D8A214` (`recipe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `author_id`, `recipe_id`, `content`, `updated_at`) VALUES
(11, 2, 8, 'Ca a l\'air vraiment bon !', '2021-03-18 22:33:30'),
(12, 3, 8, 'J\'ai essayé avec du poulet à la place du jambon et des tomates à la place des olives. Une tuerie !', '2021-03-18 22:34:07'),
(13, 1, 8, 'Faut essayer cette recette ! :)', '2021-03-18 22:34:30'),
(14, 4, 9, 'MIAM ! Ca donne envie', '2021-03-18 22:34:47'),
(15, 4, 8, 'Je veux essayer ça !', '2021-03-18 22:35:21'),
(16, 3, 8, 'J\'ai essayé avec le jambon aussi, c\'est bon mais je préfère le poulet', '2021-03-18 22:36:04');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210312092116', '2021-03-12 09:21:25', 838),
('DoctrineMigrations\\Version20210317182911', '2021-03-17 18:29:33', 1221);

-- --------------------------------------------------------

--
-- Structure de la table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partners`
--

INSERT INTO `partners` (`id`, `name`, `link`) VALUES
(1, 'Google', 'https://www.google.fr/'),
(3, 'Philippe Nguyen', 'http://philippe-nguyen.com'),
(4, 'Cindy Blanc', 'http://cindyblanc.com');

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A369E2B5F675F31B` (`author_id`),
  KEY `IDX_A369E2B512469DE2` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recipes`
--

INSERT INTO `recipes` (`id`, `author_id`, `category_id`, `title`, `image`, `description`, `updated_at`) VALUES
(8, 1, 1, 'Cake jambon olives', 'cake-jambon-olive-6053cc516c8de387881663.jpg', '<div><strong>&Eacute;TAPE 1</strong></div>\r\n\r\n<div>Pr&eacute;chauffer le four &agrave; 180&deg;C (thermostat 6).</div>\r\n\r\n<div><strong>&Eacute;TAPE 2</strong></div>\r\n\r\n<div>Couper les olives en rondelles et le jambon en morceaux.</div>\r\n\r\n<div><strong>&Eacute;TAPE 3</strong></div>\r\n\r\n<div>Verser les oeufs dans la farine et m&eacute;langer.</div>\r\n\r\n<div><strong>&Eacute;TAPE 4</strong></div>\r\n\r\n<div>Ajouter le lait et l&#39;huile puis m&eacute;langer.</div>\r\n\r\n<div><strong>&Eacute;TAPE 5</strong></div>\r\n\r\n<div>Ajouter le jambon, les olives et le gruy&egrave;re puis m&eacute;langer.</div>\r\n\r\n<div><strong>&Eacute;TAPE 6</strong></div>\r\n\r\n<div>Ajouter la levure et, pour ne pas changer, m&eacute;langer.</div>\r\n\r\n<div><strong>&Eacute;TAPE 7</strong></div>\r\n\r\n<div>Mettre le tout dans un plat &agrave; cake au pr&eacute;alable beurr&eacute; et placer au four 45 min.</div>', '2021-03-18 21:55:29'),
(9, 1, 2, 'Blanquette de veau', 'blanquette-6053ccb383030102375225.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Faire revenir la viande dans un peu de beurre doux jusqu\'à ce que les morceaux soient un peu dorés.</div><div><strong>ÉTAPE 2</strong></div><div>Saupoudrer de 2 cuillères de farine. Bien remuer.</div><div><strong>ÉTAPE 3</strong></div><div>Ajouter 2 ou 3 verres d\'eau, les cubes de bouillon, le vin et remuer. Ajouter de l\'eau si nécessaire pour couvrir.</div><div><strong>ÉTAPE 4</strong></div><div>Couper les carottes en rondelles et émincer les oignons puis les incorporer à la viande, ainsi que les champignons.</div><div><strong>ÉTAPE 5</strong></div><div>Laisser mijoter à feu très doux environ 1h30 à 2h00 en remuant.</div><div><strong>ÉTAPE 6</strong></div><div>Si nécessaire, ajouter de l\'eau de temps en temps.</div><div><strong>ÉTAPE 7</strong></div><div>Dans un bol, bien mélanger la crème fraîche, le jaune d’oeuf et le jus de citron. Ajouter ce mélange au dernier moment, bien remuer et servir tout de suite.</div>', '2021-03-18 21:57:07'),
(10, 1, 3, 'Ramequin chocolat', 'ramequinchocolat-6053cd1828e50497701251.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Faites fondre dans une casserole le chocolat et le beurre, en remuant régulièrement pour former une pâte homogène et onctueuse.</div><div><strong>ÉTAPE 2</strong></div><div>Préchauffez le four à 210°C (thermostat 7). Dans un saladier, mélangez les oeufs, le sucre et la farine.</div><div><strong>ÉTAPE 3</strong></div><div>Incorporez la préparation chocolatée et mélangez.</div><div><strong>ÉTAPE 4</strong></div><div>Versez 1/3 de la préparation dans des ramequins individuels.</div><div><strong>ÉTAPE 5</strong></div><div>Déposez deux carrés de chocolat dans chacun des 4 ramequins,</div><div><strong>ÉTAPE 6</strong></div><div>puis recouvrez-les avec le reste de la préparation chocolatée.</div><div><strong>ÉTAPE 7</strong></div><div>Placez les ramequins au four pendant environ 12 minutes, pas plus!</div><div><strong>ÉTAPE 8</strong></div><div>Dégustez de préférence chauds ou tièdes.</div>', '2021-03-18 21:58:48'),
(11, 1, 4, 'Soupe au champagne', 'soupechampagne-6053cd7a486c5937722396.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Verser dans un récipient le Cointreau, le sucre de canne et le jus de citron. Faire macérer pendant une nuit.</div><div><strong>ÉTAPE 2</strong></div><div>Ajouter le Champagne au moment de servir avec les glaçons.</div>', '2021-03-18 22:00:26'),
(12, 2, 1, 'Salade lentilles lardons', 'saladelentillelardon-6053ce145b828762186675.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Faire dorer les lardons dans une poêle avec un peu de beurre, réserver.</div><div><strong>ÉTAPE 2</strong></div><div>Dans un grand saladier, faire une bonne sauce moutarde assez relevée (huile-moutarde-vinaigre-poivre), y ajouter l\'oignon haché et le persil ciselé (en réserver 1 cuillère à soupe).</div><div><strong>ÉTAPE 3</strong></div><div>Ouvrir les boîtes de lentilles, les égoutter et les verser dans le saladier.</div><div><strong>ÉTAPE 4</strong></div><div>Mélanger. Ajouter les lardons. Mélanger à nouveau.</div><div><strong>ÉTAPE 5</strong></div><div>Ecaler les oeufs durs et les couper en rondelles. Décorer le dessus des lentilles avec ces rondelles et le reste du persil ciselé.</div>', '2021-03-18 22:03:00'),
(13, 2, 2, 'Poulet mijoté aux légumes', 'pouletmijotelegumes-6053ce603632f231588980.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Faire revenir grossièrement le poulet et les oignons dans 3 cuillères soupe d\'huile d\'olives pendant environ 10 min.</div><div><strong>ÉTAPE 2</strong></div><div>Pendant ce temps découper la courgette, la carotte, l\'aubergine et les pomme de terre en cube.</div><div><strong>ÉTAPE 3</strong></div><div>Les mettre de côté.</div><div><strong>ÉTAPE 4</strong></div><div>Mettre 1.5l d\'eau ainsi que les 2 cubes, le bouquet garni, la moutarde et le concentré de tomate.</div><div><strong>ÉTAPE 5</strong></div><div>Au bout de 30 min, intégrer les légumes découpés, couvrir et laisser mijoter à feu doux pendant 1h.</div>', '2021-03-18 22:04:16'),
(14, 2, 3, 'Gâteau aux pommes', '37211-w600-6053cebf9fe8c443354520.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Préchauffer le four à 160°C (thermostat 5-6). Mélanger tous les ingrédients de la pâte.</div><div><strong>ÉTAPE 2</strong></div><div>Ajouter les pommes préalablement coupées en cube.</div><div><strong>ÉTAPE 3</strong></div><div>Mélanger à nouveau à la spatule.</div><div><strong>ÉTAPE 4</strong></div><div>Verser la pâte à gâteau dans un moule beurré et cuire pendant 40 à 50 minutes.</div><div><strong>ÉTAPE 5</strong></div><div>Déguster !</div>', '2021-03-18 22:05:51'),
(15, 2, 4, 'Mojito', 'mojito-6053d05297dd3985680793.jpg', '<div><strong>ETAPE 1</strong></div><div>Réalisez la recette \"Mojito\" directement dans le verre</div><div><strong>ETAPE 2</strong></div><div>Placer les feuilles de menthe dans le verre, ajoutez le sucre et le jus de citrons.&nbsp;</div><div><strong>ETAPE 3</strong></div><div>Piler consciencieusement afin d\'exprimer l\'essence de la menthe mais sans la broyer.</div><div><strong>ETAPE 4</strong></div><div>&nbsp;Ajouter le rhum, remplir le verre à moitié de glaçons et compléter avec de l\'eau gazeuse. Mélanger doucement et servir avec une paille.</div><div><strong>ETAPE 5</strong></div><div>Servir dans un verre de type \"tumbler\".</div><div><strong>ETAPE 6</strong></div><div>Décorer de feuilles de menthe fraîches et d\'une tranche de citron.</div><div><br></div>', '2021-03-18 22:12:34'),
(16, 3, 1, 'Velouté champignons', 'veloutechampi-6053d0a4c5337490695318.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Faire fondre dans une casserole 3 cuillères à soupe de beurre.</div><div><strong>ÉTAPE 2</strong></div><div>Ajouter un petit oignon haché et les champignons de Paris coupés en tout petits morceaux.</div><div><strong>ÉTAPE 3</strong></div><div>Saler, poivrer, saupoudrer d’une cuillère à soupe de persil haché.</div><div><strong>ÉTAPE 4</strong></div><div>Remuer bien les champignons dans le beurre chaud. Couvrir et laisser cuire à feu doux 1/4 heure.</div><div><strong>ÉTAPE 5</strong></div><div>Ajouter alors 2 cuillères à soupe de farine en remuant sans cesse. Ajouter 1/4 litre de bouillon (ou d’eau) et 1/2 litre de lait.</div><div><strong>ÉTAPE 6</strong></div><div>Faire cuire à feu doux en remuant de temps en temps.</div><div><strong>ÉTAPE 7</strong></div><div>Lorsque le potage commence à bouillir, baisser le feu et laisser cuire à découvert encore 1/4 d’heure.</div><div><strong>ÉTAPE 8</strong></div><div>Quelques minutes avant de servir ajouter le jus d’un citron puis 2 cuillères à soupe de crème fraîche.</div>', '2021-03-18 22:13:56'),
(17, 3, 2, 'Lasagnes bolognaise', 'lasagnesbolo-6053d1078cf69783701690.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Couper l\'oignon en petits morceaux et faire revenir dans de l\'huile d\'olive.</div><div><strong>ÉTAPE 2</strong></div><div>Quand les oignons ont bien bruni, y ajouter les 350g de steak haché.</div><div><strong>ÉTAPE 3</strong></div><div>Faire cuire à feu moyen puis ajouter la sauce bolognaise.</div><div><strong>ÉTAPE 4</strong></div><div>Préparez la béchamel. Faire fondre le beurre à feu vif.</div><div><strong>ÉTAPE 5</strong></div><div>Une fois fondu, rajouter les deux cuillères à soupe de farine puis remuer avec un fouet à feu moyen.</div><div><strong>ÉTAPE 6</strong></div><div>Quand le mélange est homogène (très rapide), rajouter progressivement le lait sans arrêter de fouetter pour éviter les grumeaux.</div><div><strong>ÉTAPE 7</strong></div><div>Continuer de remuer jusqu\'à ce que la béchamel s\'épaississe.</div><div><strong>ÉTAPE 8</strong></div><div>Mélanger la sauce bolognaise faite précédemment avec la béchamel.</div><div><strong>ÉTAPE 9</strong></div><div>Puis dans un plat à gratin, verser une couche de cette préparation puis recouvrir de pâte à lasagne. Refaire la même chose jusqu\'à épuisement de la sauce (environ 2 fois).</div><div><strong>ÉTAPE 10</strong></div><div>La dernière couche doit être une couche de sauce. Ajouter le gruyère râpé et faire cuire envrion 45 min à 180° (th.6).</div><div><strong>ÉTAPE 11</strong></div><div>Pour savoir si les lasagnes sont cuites, piquer avec un couteau, les pâtes à lasagne doivent être fondantes, donc le couteau doit s\'enfoncer sans problème.</div>', '2021-03-18 22:15:35'),
(18, 3, 3, 'Pain d\'épices', 'paindepice-6053d13f739ee338418628.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Faites chauffer 250 g de miel à la casserole ou au micro-ondes.</div><div><strong>ÉTAPE 2</strong></div><div>Mélangez la farine avec la levure chimique, les deux sucres et les épices.</div><div><strong>ÉTAPE 3</strong></div><div>Ajoutez le miel chaud (en remuant idéalement avec une cuillère en bois).</div><div><strong>ÉTAPE 4</strong></div><div>Incorporez petit à petit 2 oeufs, puis un peu de lait juste tiède pour amalgamer le tout.</div><div><strong>ÉTAPE 5</strong></div><div>Préchauffez le four à 160°C (thermostat 5-6).</div><div><strong>ÉTAPE 6</strong></div><div>Versez la préparation dans un moule à cake bien beurré et fariné.</div><div><strong>ÉTAPE 7</strong></div><div>Enfournez et laissez cuire pendant 1h à 1h15.</div><div><strong>ÉTAPE 8</strong></div><div>Démoulez le pain d\'épices lorsqu\'il a totalement refroidi. Attendez 24 heures au minimum avant de le déguster.</div><div><strong>ÉTAPE 9</strong></div><div>Il se garde une semaine, enveloppé dans du papier d\'aluminium.</div>', '2021-03-18 22:16:31'),
(19, 3, 4, 'Punch sans alcool', 'punchsansalcool-6053d1d5509a9221316568.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Versez tous les liquides dans un grand récipient.</div><div><strong>ÉTAPE 2</strong></div><div>Coupez les pommes, l\'ananas et les lichis en petits morceaux.</div><div><strong>ÉTAPE 3</strong></div><div>Pressez le jus des citrons.</div><div><strong>ÉTAPE 4</strong></div><div>Ajoutez les fruits et le jus des citrons au récipient.</div><div><strong>ÉTAPE 5</strong></div><div>Assaisonnez de cannelle à votre convenance.</div><div><strong>ÉTAPE 6</strong></div><div>Vous pouvez aussi ajouter le sirop des lichis et de l\'ananas.</div>', '2021-03-18 22:19:01'),
(20, 4, 1, 'Tarte poireaux lardons', 'tartepoireaulardon-6053d224eb094256238992.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Préchauffer le four à 210°C (thermostat 7).</div><div><strong>ÉTAPE 2</strong></div><div>Faire la pâte à tarte : malaxer le beurre et la farine, l\'eau, étaler puis mettre dans le plat.</div><div><strong>ÉTAPE 3</strong></div><div>Émincer les poireaux. Les faire dorer dans un peu de beurre.</div><div><strong>ÉTAPE 4</strong></div><div>Faire dorer les lardons à part.</div><div><strong>ÉTAPE 5</strong></div><div>Les égoutter soigneusement avant de les ajouter aux poireaux.</div><div><strong>ÉTAPE 6</strong></div><div>Faire l\'appareil : mêler les oeufs, la crème, le sel et le poivre.</div><div><strong>ÉTAPE 7</strong></div><div>Étaler les poireaux et les lardons sur la pâte.</div><div><strong>ÉTAPE 8</strong></div><div>Parsemer de gruyère râpé, couvrir avec l\'appareil.</div><div><strong>ÉTAPE 9</strong></div><div>Mettre au four 25 min.</div>', '2021-03-18 22:20:20'),
(21, 4, 2, 'Pâtes carbonara', 'carbonara-6053d288748d8722109300.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Dans une casserole mettre env. 4 l d’eau à bouillir. Une fois l’eau en ébullition, ajouter 30 g de sel (moins de 10 g par litre car le guanciale et le pecorino sont déjà assez salés) et plongez-y les pâtes.</div><div><strong>ÉTAPE 2</strong></div><div>En même temps, dans un poêle, faites revenir le guanciale avec un tout petit peu d’huile d’olive vierge extra.</div><div><strong>ÉTAPE 3</strong></div><div>Dans un bol, mélangez les oeufs, le pecorino et le poivre jusqu’à l’obtention d’une crème bien onctueuse.</div><div><strong>ÉTAPE 4</strong></div><div>Une fois les pâtes cuites, versez les dans la poêle avec le guanciale et un peu d’eau de cuisson. Faites sauter le tout pendant quelques secondes puis éteignez le feu. Ajoutez les oeufs et le pecorino et mélangez le tout. Parsemez de pecorino et n’attendez pas à servir après avoir moulu encore un peu de poivre noir.</div>', '2021-03-18 22:22:00'),
(22, 4, 3, 'Galette des rois', 'galetterois-6053d2f1099d4981957824.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Préchauffer le four à 210°C (thermostat 7).</div><div><strong>ÉTAPE 2</strong></div><div>Disposer une pâte dans un moule à tarte, la piquer avec 1 fourchette.</div><div><strong>ÉTAPE 3</strong></div><div>Mélanger dans un saladier tous les ingrédients (poudre d\'amandes, sucre, oeuf, beurre mou et extrait d\'amande amère).</div><div><strong>ÉTAPE 4</strong></div><div>Etaler la préparation sur la pâte, y mettre la fève (sur un bord, pour minimiser les chances de tomber dessus en coupant la galette!).</div><div><strong>ÉTAPE 5</strong></div><div>Refermer la galette avec la seconde pâte et bien souder les bords.</div><div><strong>ÉTAPE 6</strong></div><div>A l\'aide d\'un couteau, décorer la pâte en y traçant des dessins et dorer au jaune d\'oeuf (dilué dans un peu d\'eau).</div><div><strong>ÉTAPE 7</strong></div><div>Percer le dessus de petits trous pour laisser l\'air s\'échapper, sinon elle risque de gonfler et de se dessécher.</div><div><strong>ÉTAPE 8</strong></div><div>Enfourner pendant 30 minutes environ (surveiller la cuisson dès 25 minutes, mais ne pas hésiter à laisser jusqu\'à 40 minutes si nécessaire).</div><div><strong>ÉTAPE 9</strong></div><div>Déguster.</div>', '2021-03-18 22:23:44'),
(23, 5, 1, 'Salade chèvre chaud', 'saladechevre-6053d383ad0a1345020481.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Frotter les quatres tranches de pain de campagne avec la gousse d\'ail. Couper les pélardons en deux dans la largeur. Poser sur chaque tranche de pain une moitié de pélardon.</div><div><strong>ÉTAPE 2</strong></div><div>Mettez-les sur la plaque de votre four avec du papier cuisson puis arrosez-les d\'huile d\'olive et de basilic. Faire cuire 15 mn.</div><div><strong>ÉTAPE 3</strong></div><div>Pendant ce temps, laver la salade et installer deux ou trois feuilles dans chaque assiette. Laver les tomates, coupez-les en deux et trancher chaque moitié en fines tranches. Posez-les sur la salade.</div><div><strong>ÉTAPE 4</strong></div><div>Faire cuire les lardons à votre convenance sans ajouter de matière grasse. Disperser les sur la salade.</div><div><strong>ÉTAPE 5</strong></div><div>Couper huit lamelles de poivron et faire cuire dans de l\'huile d\'olive à feu très doux jusqu\'à ce que le poivron soit fondant. Déposer quatre lamelles de poivron par assiette.</div><div><strong>ÉTAPE 6</strong></div><div>Faire la sauce pour la salade (celle que vous préférez, il y à plusieurs recettes sur Marmiton) et déposer les toasts de chèvre chaud sur la présentation. Saupoudrer de basilic ciselé.</div>', '2021-03-18 22:26:11'),
(24, 5, 2, 'Tomates farcies', 'tomatesfarcies-6053d3ec5f665734270619.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Eplucher et hacher les oignons. Eplucher et hacher les gousses d\'ail.</div><div><strong>ÉTAPE 2</strong></div><div>Mettre la moitié des oignons dans la chair à saucisse. Ajouter l\'ail, le sel, le poivre et un peu de persil.</div><div><strong>ÉTAPE 3</strong></div><div>Couper le haut des tomates et les évider. Poivrer et saler l\'intérieur. Mettre la farce à l\'intérieur et remettre les chapeaux.</div><div><strong>ÉTAPE 4</strong></div><div>Mettre le reste des oignons dans un plat avec la chair des tomates.</div><div><strong>ÉTAPE 5</strong></div><div>Mettre les tomates farcies dans le plat. Parsemez d\'un peu de thym et mette une noisette de beurre sur chaque tomates. Faire cuire au four chaud à 180°C (thermostat 6) pendant 1 heure environ.</div><div><strong>ÉTAPE 6</strong></div><div>Servir avec du riz.</div>', '2021-03-18 22:27:56'),
(25, 5, 3, 'Tiramisu', 'tiramisu-6053d43d6b460951297493.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Cassez les oeufs, séparez les blancs des jaunes dans deux saladiers. Ajoutez le sucre aux jaunes et fouettez jusqu\'à ce que le mélange blanchisse et fasse un ruban quand on soulève le fouet.</div><div><strong>ÉTAPE 2</strong></div><div>Incorporez le mascarpone en petits morceaux, et fouettez pour rendre la préparation homogène. Fouettez les blancs d\'oeufs en neige très fermement, avec une pincée de sel.</div><div><strong>ÉTAPE 3</strong></div><div>Incorporez-les délicatement à la préparation précédente, avec la spatule, en mélangeant du bas vers le haut, pour ne pas faire retomber les blancs.</div><div><strong>ÉTAPE 4</strong></div><div>Versez 1/4 de la crème ainsi obtenue dans le fond d’un plat creux rectangulaire de 30x20 cm. Versez le café dans une assiette creuse. Trempez rapidement 1/3 des biscuits et disposez les côte à côte sur la crème. Recouvrez les d’un second quart de crème, puis de biscuits trempés, etc... jusqu\'à ce que vous ayez réalisé 4 couches de crème et 3 couches de biscuits. Terminez par une couche de crème et placez au frais au moins 4 heures.</div><div><strong>ÉTAPE 5</strong></div><div>Juste avant de servir, saupoudrez de cacao tamisé à travers une passoire fine.</div>', '2021-03-18 22:29:17'),
(26, 5, 4, 'Pina Colada', 'pinacolada-6053d4f215e7d320786122.jpg', '<div><strong>ÉTAPE 1</strong></div><div>Mettre tous les ingrédients, sauf les glaçons, dans un mixer et faire tourner à très grande vitesse pendant 30 sec environ.</div><div><strong>ÉTAPE 2</strong></div><div>Mettre les glaçons dans les verres et verser par-dessus la crème obtenue.</div>', '2021-03-18 22:32:18');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `roles` json NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`),
  UNIQUE KEY `UNIQ_1483A5E935C246D5` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `image`, `updated_at`, `roles`) VALUES
(1, 'admin', 'admin@admin.com', '$argon2id$v=19$m=65536,t=4,p=1$R3EuMGpvbHl6Vk16RHRPUA$OLhYb55uyAk0TFcw/uH+To3ef81PYvQPqDw5Z+uLTWY', 'papageek-60534f99bd152759476306.png', '2021-03-18 13:03:18', '[\"ROLE_ADMIN\"]'),
(2, 'user1', 'user1@user1.com', '$argon2id$v=19$m=65536,t=4,p=1$dDlYZUFwRWt2NFFHaXdlQQ$pZFWPIWoU+vJA3u1HFWaRvMFbgfkdON7neuQ107S6C0', '1454190967waokg-6053cb62de3b2119992726.jpg', '2021-03-18 21:51:27', '[\"ROLE_USER\"]'),
(3, 'user2', 'user2@user2.com', '$argon2id$v=19$m=65536,t=4,p=1$OTg2Q0dpdE5WTFRPWWY4NQ$eAtalHJlk9Bg1ZEdAdFtE7U3i8nqYDK6NlfkZtaAYmk', NULL, '2021-03-18 21:17:51', '[]'),
(4, 'user3', 'user3@user3.com', '$argon2id$v=19$m=65536,t=4,p=1$cmNkMGRyWVlaM0xEdkFrQw$B9Iyjn2sFPLSPtht1mC3avaGQQM0Zxt5/dImc+ZDsLY', NULL, '2021-03-18 21:21:28', '[]'),
(5, 'user4', 'user4@user4.com', '$argon2id$v=19$m=65536,t=4,p=1$clNCUi51Tjd6R2pzQnRyQQ$JHJX1ZoAfB8t0oiMtIhTgvbGgwqgVZhmDWyLPUVP3fw', NULL, '2021-03-18 21:23:47', '[]');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962A59D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`),
  ADD CONSTRAINT `FK_5F9E962AF675F31B` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `FK_A369E2B512469DE2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_A369E2B5F675F31B` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
