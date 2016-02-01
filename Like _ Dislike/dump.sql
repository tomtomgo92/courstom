-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.6.21-1~dotdeb.1 - (Debian)
-- Serveur OS:                   debian-linux-gnu
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de table blog. articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `like_count` int(11) DEFAULT '0',
  `dislike_count` int(11) DEFAULT '0',
  `vote_count` int(11) DEFAULT '0',
  `score` float DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `categogy_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Export de données de la table blog.articles: ~2 rows (environ)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`, `category_id`, `like_count`, `dislike_count`, `vote_count`, `score`) VALUES
	(9, 'Like / Dislike', 'Cette article peut être aimé ou non aimé avec un système de like / dislike qui ressemble vachement à ce que l\'on retrouve sur youtube', '0000-00-00 00:00:00', 2, 2, 1, 0, 0),
	(10, 'Vote à étoiles', 'Sur cette article on peut donner un vote compris entre 0 et 5 avec un système d\'étoile :)', NULL, 1, 1, 0, 3, 2.7);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;


-- Export de la structure de table blog. votes
CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) DEFAULT '0',
  `ref` varchar(50) DEFAULT '0',
  `user_id` int(11) DEFAULT '0',
  `vote` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `ref_id` (`ref_id`),
  KEY `ref` (`ref`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Export de données de la table blog.votes: ~5 rows (environ)
/*!40000 ALTER TABLE `votes` DISABLE KEYS */;
INSERT INTO `votes` (`id`, `ref_id`, `ref`, `user_id`, `vote`, `created_at`) VALUES
	(6, 9, 'articles', 1, 1, '2015-02-08 15:20:59'),
	(7, 9, 'articles', 2, -1, '2015-02-08 11:36:00'),
	(19, 9, 'articles', 3, 1, '2015-02-08 12:35:10'),
	(25, 10, 'articles', 2, 5, '2015-02-09 05:59:47'),
	(26, 10, 'articles', 1, 2, '2015-02-09 05:59:55'),
	(27, 10, 'articles', 3, 1, '2015-02-09 06:00:01');
/*!40000 ALTER TABLE `votes` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
