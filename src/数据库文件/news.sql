-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-06-13 05:53:38
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `dateline` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `author`, `description`, `content`, `dateline`) VALUES
(1, 'Youth', 'Adam', 'Youth is not a time of life; it is a state of mind; it is not a matter of rosy cheeks, red lips and ', 'Youth is not a time of life; it is a state of mind; it is not a matter of rosy cheeks, red lips and supple knees; it is a matter of the will, a quality of the imagination, a vigor of the emotions; it is the freshness of the deep springs of life.\r\n\r\nYouth means a temperamental predominance of courage over timidity, of the appetite for adventure over the love of ease. This often exists in a man of 60 more than a boy of 20. Nobody grows old merely by a number of years. We grow old by deserting our ideals.\r\n\r\nYears may wrinkle the skin, but to give up enthusiasm wrinkles the soul. Worry, fear, self-distrust bows the heart and turns the spirit back to dust.\r\n\r\nWhether 60 or 16, there is in every human being’s heart the lure of wonders, the unfailing childlike appetite for what’s next and the joy of the game of living. In the center of your heart and my heart, there is a wireless station; so long as it receives messages of beauty, hope, courage and power from man and from the infinite, so long as you are young.\r\n\r\nWhen your aerials are down, and your spirit is covered with snows of cynicism and the ice of pessimism, then you’ve grown old, even at 20; but as long as your aerials are up, to catch waves of optimism, there’s hope you may die young at 80.', 1434079607),
(2, 'Three', 'Hellen', 'All of us have read thrilling stories in which the hero had only a limited and specified time to liv', 'All of us have read thrilling stories in which the hero had only a limited and specified time to live. Sometimes it was as long as a year, sometimes as short as 24 hours. But always we were interested in discovering just how the doomed hero chose to spend his last days or his last hours. I speak, of course, of free men who have a choice, not condemned criminals whose sphere of activities is strictly delimited. \r\n\r\nSuch stories set us thinking, wondering what we should do under similar circumstances. What events, what experiences, what associations should we crowd into those last hours as mortal beings, what regrets? \r\n\r\nSometimes I have thought it would be an excellent rule to live each day as if we should die tomorrow. Such an attitude would emphasize sharply the values of life. We should live each day with gentleness, vigor and a keenness of appreciation which are often lost when time stretches before us in the constant panorama of more days and months and years to come. There are those, of course, who would adopt the Epicurean motto of “Eat, drink, and be merry”. But most people would be chastened by the certainty of impending death. \r\n\r\nIn stories the doomed hero is usually saved at the last minute by some stroke of fortune, but almost always his sense of values is changed. He becomes more appreciative of the meaning of life and its permanent spiritual values. It has often been noted that those who live, or have lived, in the shadow of death bring a mellow sweetness to everything they do. \r\n\r\nMost of us, however, take life for granted. We know that one day we must die, but usually we picture that day as far in the future. When we are in buoyant health, death is all but unimaginable. We seldom think of it. The days stretch out in an endless vista. So we go about our petty tasks, hardly aware of our listless attitude toward life. \r\n\r\nThe same lethargy, I am afraid, characterizes the use of all our faculties and senses. Only the deaf appreciate hearing, only the blind realize the manifold blessings that lie in sight. Particularly does this observation apply to those who have lost sight and hearing in adult life. But those who have never suffered impairment of sight or hearing seldom make the fullest use of these blessed faculties. Their eyes and ears take in all sights and sounds hazily, without concentration and with little appreciation. It is the same old story of not being grateful for what we have until we lose it, of not being conscious of health until we are ill. \r\nI have often thought it would be a blessing if each human being were stricken blind and deaf for a few days at some time during his early adult life. Darkness would make him more appreciative of sight; silence would teach him the joys of sound. ', 1434080258);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
