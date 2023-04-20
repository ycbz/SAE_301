-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 oct. 2022 à 08:55
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lcdr`
--

-- --------------------------------------------------------

--
-- Structure de la table `caissesavon`
--

CREATE TABLE `caissesavon` (
  `idCaisseSavon` int(11) NOT NULL,
  `nomCaisseSavon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `nomCategorie` varchar(255) NOT NULL,
  `reglement` text DEFAULT NULL,
  `lienFederation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nomCategorie`, `reglement`, `lienFederation`) VALUES
(1, 'C3', 'Catégorie des enfants de 14 à 17 ans : <i>speed-car</i>, véhicule automobile sans moteur monoplace proche d’une voiture de course, composé de quatre roues, dont un système de suspensions est autorisé. La direction est actionnée par un volant fermé. Le taille maximale autorisée est de 2,5 mètres par 1,2 mètre. Des freins efficaces sont obligatoires sur les quatres roues.', '<a href=\"https://www.federation-caisses-a-savon.com/_files/ugd/2e6eb3_e48d9b79c5de4405bc0207288c90ec98.pdf\"></a>'),
(2, 'C4', 'Catégorie des adultes, à partir de 18 ans : <i>speed-car</i>, véhicule automobile sans moteur monoplace proche d’une voiture de course, composé de quatre roues, dont un système de suspensions est autorisé. La direction est actionnée par un volant fermé. Le taille maximale autorisée est de 2,5 mètres par 1,2 mètre. Des freins efficaces sont obligatoires sur les quatres roues.', '<a href=\"https://www.federation-caisses-a-savon.com/_files/ugd/2e6eb3_e48d9b79c5de4405bc0207288c90ec98.pdf\"></a>'),
(3, 'C7', 'Catégorie des adultes, à partir de 18 ans : <i>carioli</i>, véhicule automobile sans moteur essentiellement composé de bois, hors quelques pièces (voir le règlement de la fédération ci-dessous) dont l’équipage est composé d’un conducteur, à l’avant, et d’un passager, le freineur, situé à l’arrière ; équivalent du <i>bobsleigh</i> sur route. Les freins sont au nombre de deux, actionnés vers le sol et indépendants. La taille maximale autorisée est de 1,85 mètre par 0,8 mètre.', '<a href=\"https://www.federation-caisses-a-savon.com/_files/ugd/2e6eb3_130d78471c384b0d9115ffdf918832a5.pdf\"></a>');

-- --------------------------------------------------------

--
-- Structure de la table `confrerie`
--

CREATE TABLE `confrerie` (
  `idConfrerie` int(11) NOT NULL,
  `bio` text DEFAULT NULL,
  `nomConfrerie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `confrerie`
--

INSERT INTO `confrerie` (`idConfrerie`, `bio`, `nomConfrerie`) VALUES
(1, 'Les États du Velay composés de bénédictins, claristes, trappistes, cordeliers ou célestins, ont quitté l’abri austère de leurs monastères le temps d’une prière avec leur reliquaire.', 'Les États du Velay'),
(2, 'Attirée par l’odeur du pain chaud et le bruit des meules de pierre qui crissent sur le blé, la vie s’active autour des boulangers qui pétrissent et donneront forme au meilleur pain de la contrée !', 'Les Bannetiers de Montagnac'),
(3, 'Ces guerriers sans foi ni loi ne répondent qu’à l’appel de l’argent. En attendant de prêter leurs services au plus offrant, ils vaquent à leur occupation de mercenaires et de festoyeurs, de jour comme de nuit.', 'Les Mercenaires du Velay'),
(4, 'Ces passionnés d’armes partagent bien volontiers leurs savoirs dans le maniement de l’épée, de la vouge et de la hallebarde. Leurs démonstrations de force et de technique ne manqueront pas d’impressionner les passants.', 'La Piedtailhe'),
(5, 'Le murmure court qu’une attaque est imminente dans l’enceinte de la cité. Les preux chevaliers croisent le fer dans des entrainements réguliers pour ne pas laisser la moindre chance à l’ennemi.', 'Les Affres d’Adonaï'),
(6, 'Les lances aiguisées, les Piquiers sont toujours prêts à se saisir de leurs armes pour défendre leur roi et la population ! Ils patrouillent dans la ville pour s’assurer de la sécurité de tous mais assurent également les soins aux soldats blessés grâce à leur hôpital de campagne et à son chirurgien.', 'Les Piquiers du Velay'),
(7, 'Les fiers archers du Velay initieront les audacieux au tir à l’arc. Ces derniers devront faire preuve de précision et de concentration pour ne pas manquer leur cible.', 'La première compagnie des Archers du Velay'),
(8, 'Les bonnes gens de Cramailh et Croc en Jambe excellent particulièrement dans le travail de la laine, le coulage de bougies, la fonte de médailles et l’artisanat en général. N’hésitez pas à passer un moment auprès d’eux pour découvrir les secrets de ces savoir-faire ancestraux et la beauté du geste maîtrisé.', 'Cramailh et Croc en jambe'),
(9, 'La joyeuse assemblée réunie dans les jardins de Galard peut compter sur les comédiens de Miramande pour apporter légèreté et drôlerie à ce jardin des Isles à visiter absolument !', 'L’Isle de Miramande'),
(10, 'Quand arrive le mois de septembre, les vendanges touchent à leur fin. Les vignerons de Panaveyre ont bien travaillé cette année et partageront leurs secrets de fabrication jusqu’à présent bien gardés.', 'L’Isle de Panaveyre'),
(11, 'Les rôtisseurs s’activent devant leur feu afin de cuire poulets et lapins, et les plumeuses de volailles fabriquent des oreillers et édredons bien douillets ! Sur le marché de l’Estrapade, les plus gourmets viennent sélectionner leurs volailles pour festoyer au cours de mémorables banquets.', 'L’Isle de l’Estrapade'),
(12, 'Autour des jeux de dés, de cartes et palets, tous viennent se défier et parier les deniers prêtés par le croupier. Les paris marchent fort bien et les affaires sont prospères ! Mais attention, l’armée du Roi veille et vient jouer les trouble-fête !', 'L’Isle de Papelengue'),
(13, 'Les gens de Garamentes ont plus d’une corde à leur arc : Ils présentent leurs différentes armes et en expliquent les techniques de fourbissement et d’entretien. Ils feutrent la laine, travaillent le cuir et fabriquent des carreaux avec l’argile rouge toute proche de Brives-Charensac.', 'L’Isle de Garamentes'),
(14, 'On se détend dans les étuves de Lioussac, en se faisant savonner vigoureusement et délicatement parfumer, tout en se délectant des volailles et autres poulardes préparées par les rôtisseurs de l’Estrapade !', 'L’Isle de Lioussac'),
(15, 'Dans ce camp se trouve de bien utiles connaissances. Des secrets de la fabrication du papier aux techniques calligraphiques à la plume d’oie, en passant par la reliure et la couture des livres, les artisans de ce camp ont plus d’un talent dans leurs mains.', 'L’Isle de la Viguerie'),
(16, 'Sous la protection de la Vierge et de Sainte Gertrude ses saints patrons, la confrérie des tissuteurs rubaniers, artisans de la petite navette, confectionne des galons, rubans et autres lacets qui iront agrémenter les habits des gens de grandes maisons du Puy-en-Velay.', 'L’Isle de Mochafède'),
(17, 'Les bannis occitans des Pieds Poudreux sont composés de déserteurs, d’aventuriers insoumis et de mercenaires errants … Islotiers des états du Velay, ce sont des enfants de la guerre qui, rassemblés en bandes sont méprisés à l’époque. Ils n’en sont pas moins de redoutables combattants en quête d’honneur et de richesses !', 'Les Pieds Poudreux'),
(18, 'Les Compains sont d’aimables et joyeux compagnons qui n’ont de cesse de partager leurs savoir-faire et leurs histoires. Certains s’affairent en cuisine où d’autres sont à l’ouvrage autour du « Papegaï », le grill Renaissance, pendant que quelques-uns prennent du bon temps autour d’une table de jeu. Ils vous accueillent et vous invitent à jouer avec eux !', 'Les Compains'),
(19, 'Les moines de St Théofrède viennent de sortir de leur retraite du Monastier-sur-Gazeilles et s’adonnent patiemment au travail du cuir pendant que les joyeux musiciens des Mange Chèvres font résonner cuivres et tambours.', 'Les Mange-Chèvres'),
(20, 'À l’aide d’une réplique d’une machine élévatoire, les tailleurs de pierre, charpentiers, scieurs de longs et autres compagnons bâtisseurs entreprennent de construire, une assise aux dimensions de Gargantua ! Leur immense atelier vous permettra d’appréhender la réalité titanesque des grands travaux de la Renaissance.', 'Les Bâtisseurs d’Antan'),
(21, 'En 1511, alors que Maximilien Ier rappelle tous les lansquenets, des mercenaires d’origine germanique éparpillés en Europe au service des princes, il s’en trouve quelques-uns qui choisissent de demeurer au service de François Ier et deviennent la célèbre « Légion Noire ». Une partie d’entre eux a fait halte dans la cité pour les festivités.', 'Les Schwarze Landsknechte'),
(22, 'Venant des terres autour de la Durande, ils portent des traditions ancestrales mais font preuve d’une grande curiosité pour les nouvelles sciences que notre époque développe. Leur habileté est remarquable dans les jeux qu’ils vous proposent de partager ou dans les arts qu’ils sont seuls à exercer, que ce soit à la forge ou à la délicate fabrication d’onguents ou autres philtres envoutants, plus guérisseurs que sorciers.', 'Trolvergne'),
(23, 'Ces fameux saltimbanques ont voyagé dans toutes les directions pour y découvrir l’art lumineux du spectacle et l’art sombre de l’illusion. Du nord au sud et même à l’est, tout à l’est, jusqu’au prochain océan, là où personne ne peut traduire ce qui se dit, ils portent les messages d’un lieu à l’autre et la bonne humeur dans la fête.', 'Ersa Malombrina'),
(24, 'Ayant vécu leur lot de batailles, ces valeureux vétérans se consacrent maintenant à la fabrication des arcs et des flèches qu’ils ont si longtemps maniés.', 'L’Arc en Main');

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

CREATE TABLE `parcours` (
  `idParcours` int(11) NOT NULL,
  `nomParcours` varchar(255) NOT NULL,
  `descriptif` varchar(255) NOT NULL,
  `distanceMetres` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `parcours`
--

INSERT INTO `parcours` (`idParcours`, `nomParcours`, `descriptif`, `distanceMetres`) VALUES
(1, 'Parcours Adulte', 'Part des hauteurs d\'Espaly-Saint-Marcel pour arriver à l\'église Saint-Laurent, en passant par les boulevards Gambetta et Saint-Louis.', 1500),
(2, 'Parcours Enfant', 'Part de la cathédrale du Puy pour arriver à l\'église Saint-Laurent, en passant par les boulevards Gambetta et Saint-Louis.', 500);

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `idParticipant` int(11) NOT NULL,
  `nomParticipant` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` int(10) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `caissesavon`
--
ALTER TABLE `caissesavon`
  ADD PRIMARY KEY (`idCaisseSavon`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Index pour la table `confrerie`
--
ALTER TABLE `confrerie`
  ADD PRIMARY KEY (`idConfrerie`);

--
-- Index pour la table `parcours`
--
ALTER TABLE `parcours`
  ADD PRIMARY KEY (`idParcours`);

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`idParticipant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `caissesavon`
--
ALTER TABLE `caissesavon`
  MODIFY `idCaisseSavon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `confrerie`
--
ALTER TABLE `confrerie`
  MODIFY `idConfrerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `parcours`
--
ALTER TABLE `parcours`
  MODIFY `idParcours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `idParticipant` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
