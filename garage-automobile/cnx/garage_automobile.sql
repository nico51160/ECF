CREATE DATABASE garage_automobile;

USE garage_automobile;

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ;

INSERT INTO utilisateurs (id, nom, prenom, email, telephone, role, login, password) VALUES (NULL, 'Parrot', 'Vincent', 'vincent@g.com', '0688576965', 'Administrateur', 'vincent', '202cb962ac59075b964b07152d234b70');

CREATE TABLE `contact` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `message` text NOT NULL
);

CREATE TABLE `service` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
);

INSERT INTO `service` (`id`, `nom`, `description`, `image`) VALUES
(NULL, 'Réparation de carrosserie', 'La réparation de carrosserie automobile est un processus essentiel visant à restaurer l\'intégrité structurelle et esthétique d\'un véhicule endommagé suite à une collision, un accident ou d\'autres dommages extérieurs. ', '/garage-automobile/public/images/services/carrosserie.jpg'),
(NULL, 'Entretien de voitures', '\nL\'entretien automobile est une série d\'activités planifiées visant à maintenir, réparer et prévenir l\'usure des composants d\'un véhicule. C\'est une pratique essentielle pour assurer le bon fonctionnement.', '/garage-automobile/public/images/services/entretien.jpg'),
(NULL, 'Lavage de voiture', 'Le lavage automobile est un service essentiel pour maintenir l\'apparence esthétique d\'un véhicule tout en contribuant à sa préservation. Il s\'agit d\'une pratique qui va au-delà de l\'aspect esthétique.', '/garage-automobile/public/images/services/lavage.jpg');

CREATE TABLE `temoignage` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `note` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ;

INSERT INTO `temoignage` (`id`, `nom`, `commentaire`, `note`, `status`) VALUES
(NULL, 'niconico', 'tres bien ', 9, 1),
(NULL, 'nico', 'mauvais', 3, 1),
(NULL, 'terry', 'bad service', 4, 1),
(NULL, 'Nicolas', 'good service', 8, 1);


CREATE TABLE `voiture` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `caracteristiques` text NOT NULL,
  `moteur` varchar(50) NOT NULL,
  `annee` int(10) NOT NULL,
  `kilometrage` int(10) NOT NULL,
  `prix` int(10) NOT NULL
) ;

INSERT INTO `voiture` (`id`, `nom`, `caracteristiques`, `moteur`, `annee`, `kilometrage`, `prix`) VALUES
(NULL, 'Royce', 'Rolls-Royce est une marque britannique de voitures de luxe et de moteurs aéronautiques. La société est renommée pour sa qualité exceptionnelle, son artisanat méticuleux et son héritage prestigieux.', 'moteur', 2020, 434, 4343),
(NULL, 'Mercedes', 'Mercedes-Benz, le constructeur automobile allemand de renom, est réputé pour sa gamme de véhicules de luxe, alliant performance, élégance et technologie avancée. De la classe C à la série S, en passant par les SUV GLE et GLC, la marque incarne l\'innovation et l\'exclusivité. Pionnier dans le domaine des véhicules électriques, Mercedes-Benz continue d\'établir des normes élevées dans l\'industrie automobile.', 'SUV GLE', 2020, 200, 1400),
(NULL, 'Range', 'Le Range Rover, produit par Land Rover, incarne le luxe et la robustesse. Avec ses performances tout-terrain exceptionnelles, ses intérieurs somptueux et son design emblématique, le Range Rover demeure une référence parmi les SUV haut de gamme. Reconnu pour son mariage réussi entre élégance urbaine et capacités tout-terrain, il reste un choix prisé dans le monde de l\'automobile de luxe.', 'Suv moteur', 2015, 400, 3000),
(NULL, 'Peugeot', 'Peugeot, constructeur automobile français de renom, se distingue par ses véhicules au design dynamique et épuré. Alliant performance et élégance, les modèles Peugeot, tels que la Peugeot 308, incarnent l\'innovation technologique et l\'engagement envers la durabilité. La marque demeure une référence pour ceux qui recherchent un équilibre entre style contemporain et efficacité énergétique.', 'Moteur 308', 2014, 130, 4000),
(NULL, 'Tesla', 'La Tesla est une voiture électrique haut de gamme fabriquée par Tesla, Inc., renommée pour ses performances exceptionnelles, son autonomie élevée et son système avancé de conduite autonome.', 'Tesla moteur', 2012, 500, 5000),
(NULL, 'Toyota', 'La Toyota est une marque automobile mondialement reconnue, réputée pour sa fiabilité, son efficacité énergétique et son engagement envers la durabilité, offrant une gamme variée de véhicules, y compris des modèles hybrides et électriques.', 'Moteur Toyota', 2021, 300, 4300);

CREATE TABLE `voiture_images` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `voiture_id` INT NOT NULL,
  `lien` VARCHAR(255) NOT NULL,
  FOREIGN KEY (`voiture_id`) REFERENCES `voiture` (`id`)
);

 INSERT INTO `voiture_images` (`id`, `voiture_id`, `lien`) VALUES
(NULL, 1, '/garage-automobile/public/images/voitures/royce1.jpg'),
(NULL, 1, '/garage-automobile/public/images/voitures/royce2.jpg'),
(NULL, 1, '/garage-automobile/public/images/voitures/royce3.jpg'),
(NULL, 1, '/garage-automobile/public/images/voitures/royce4.jpg'),
(NULL, 1, '/garage-automobile/public/images/voitures/royce5.jpg'),
(NULL, 1, '/garage-automobile/public/images/voitures/royce6.jpg'),
(NULL, 2, '/garage-automobile/public/images/voitures/mercedes1.jpg'),
(NULL, 2, '/garage-automobile/public/images/voitures/mercedes2.jpg'),
(NULL, 2, '/garage-automobile/public/images/voitures/mercedes3.jpg'),
(NULL, 2, '/garage-automobile/public/images/voitures/mercedes4.jpg'),
(NULL, 2, '/garage-automobile/public/images/voitures/mercedes5.jpg'),
(NULL, 3, '/garage-automobile/public/images/voitures/range1.jpg'),
(NULL, 3, '/garage-automobile/public/images/voitures/range2.jpg'),
(NULL, 3, '/garage-automobile/public/images/voitures/range3.jpg'),
(NULL, 3, '/garage-automobile/public/images/voitures/range4.jpg'),
(NULL, 3, '/garage-automobile/public/images/voitures/range5.jpg'),
(NULL, 4, '/garage-automobile/public/images/voitures/peugeot1.jpg'),
(NULL, 4, '/garage-automobile/public/images/voitures/peugeot2.jpg'),
(NULL, 4, '/garage-automobile/public/images/voitures/peugeot3.jpg'),
(NULL, 4, '/garage-automobile/public/images/voitures/peugeot4.jpg'),
(NULL, 5, '/garage-automobile/public/images/voitures/tesla1.jpg'),
(NULL, 5, '/garage-automobile/public/images/voitures/tesla2.jpg'),
(NULL, 5, '/garage-automobile/public/images/voitures/tesla3.jpg'),
(NULL, 5, '/garage-automobile/public/images/voitures/tesla4.jpg'),
(NULL, 6, '/garage-automobile/public/images/voitures/toyota1.jpg'),
(NULL, 6, '/garage-automobile/public/images/voitures/toyota2.jpg'),
(NULL, 6, '/garage-automobile/public/images/voitures/toyota3.jpg');

CREATE TABLE `horaire` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `jour` varchar(100) NOT NULL,
  `matinee` varchar(100) NOT NULL,
  `apresmidi` varchar(100) NOT NULL
) ;

INSERT INTO `horaire` (`id`, `jour`, `matinee`, `apresmidi`) VALUES
(NULL, 'lundi', '08:45 - 12:00', '14:00 - 18:00'),
(NULL, 'mardi', '08:45 - 12:00', '14:00 - 18:00'),
(NULL, 'mercredi', '08:45 - 12:00', '14:00 - 18:00'),
(NULL, 'jeudi', '08:45 - 12:00', '14:00 - 18:00'),
(NULL, 'vendredi', '08:45 - 12:00', '14:00 - 18:00'),
(NULL, 'samedi', '08:45 - 12:00', ''),
(NULL, 'dimanche', 'Ferme', '');







