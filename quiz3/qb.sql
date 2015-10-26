-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2011 at 03:59 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `questionb`
--

-- --------------------------------------------------------

--
-- Table structure for table `qb`
--

CREATE TABLE IF NOT EXISTS `qb` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL,
  `c` varchar(200) NOT NULL,
  `d` varchar(200) NOT NULL,
  `correctans` varchar(35) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `qb`
--

INSERT INTO `qb` (`sno`, `question`, `a`, `b`, `c`, `d`, `correctans`) VALUES
(1, 'After which sporting hero was Formula 1 driver Lewis Hamilton named?', 'Carl Lewis', 'Carl james', 'James', 'Lewis Carl', 'a'),
(2, 'Against which country did England concede one of the fastest goals ever in international soccer in November 1993, but went on to win 7-1?', 'South Korea 19 seconds', 'South Africa 4 seconds', 'Germany 17 seconds ', 'San Marino 7 seconds', 'd'),
(3, 'At the end of the 2005/06 Premiership season, which football team had the stadium with the highest capacity?', 'Manchester', 'United States', 'Manchester United', 'America', 'c'),
(4, 'At what boxing weight did Ricky Hatton fight? (in 2007)', 'Bantamweight', 'Welterweight', 'Featherweight', 'Lightweight', 'b'),
(5, 'At what other sport did cricketer W.G.Grace captain England?', 'Baseball', 'Bowls', 'Field Hockey', 'Fencing', 'b'),
(6, 'At which English Racecourse are the 1,000 and 2,000 guineas run?', 'Aintree', 'Plumpton', 'Newmarket', 'York', 'c'),
(7, 'Charlotte Edwards led Englands women to World Cup glory in which sport in March 2009?', 'Hockey', 'Baseball', 'Football', 'Cricket', 'd'),
(8, 'Name the English Cricketer born in Preston in 1977, who was captain of England in 2006.', 'Andrew Peterson', 'Sachin', 'Andrew Flintoff', 'Peter Parker', 'c'),
(9, 'The 2002 Football League Cup final was a first to ...?', 'Be played on a Monday', 'Be played of half artificial turf', 'Be played above roof', 'Be played under roof', 'd'),
(10, 'Football defender Luis Moreno kicked what off the pitch at the Atletico Junior stadium in Columbia in March 2011?', 'A boot', 'An owl', 'A top hat', 'A fish', 'b'),
(11, 'For which county did seam bowler Jon Lewis play?', 'Gloucestershire', 'Essex', 'Glamorgan', 'Sussex', 'a'),
(12, 'Founded in 1862, what is considered to be the oldest soccer club in the football league?', 'Liverpool', 'Swansea', 'Manchester City', 'Notts County', 'd'),
(13, 'How many gold medals did Chris Hoy win in the 2008 olympics?', '2', '3', '4', '5', 'b'),
(14, 'How many horses have ever won the Derby twice?', 'None - its for two year olds', 'None - Its for three year olds', '4 as of 2011', 'Over 20', 'b'),
(15, 'How many people take part in the Oxford and Cambridge Boat Race?', '8', '12', '16', '18', 'd'),
(16, 'How many points do you get for a field goal in American Football?', '1', '2', '3', '4', 'c'),
(17, 'How many yards is a cricket pitch from stumps to stumps?', '18 yards', '20 yards', '21 yards', '22 yards', 'd'),
(18, 'In 1933 England gained the Ashes at the end of a tour which gained a particular nickname. What was it ?', 'Skyline', 'Stumpline', 'Headline', 'Bodyline', 'd'),
(19, 'In 1968, who became the first batsman to hit six sixes in an over in first-class cricket?', '(Sir) Gary Sobers', '(Sir) Sobers', '(Sir) Gary', '(Sir) Sobers Gary', 'a'),
(20, 'In cricket, what is the name given to a 5-over period when only two fielders are allowed outside the 30-yard circle?', 'Megaplay', 'Powerplay', 'Hugeplay', 'Bullplay', 'b'),
(21, 'Behind Boeing and Airbus the third and forth biggest airplane manufacturers are ...?', 'Canadian Bombardier and Brazilian Embraer', 'Canadian Bombardier and Scottish Fowles Air', 'Russian Sukoi and Canadian Bombardier', 'Russian Sukoi and Brazilian Embraer', 'a'),
(22, 'According to a year 2000 worldwide transport study the mode of transport with the most deaths per billion journeys is ...?', 'Airplane', 'Bicycle', 'Car', 'Motorcycle', 'd'),
(23, 'The equations that relate velocity and air pressure and underpin wing design were developed by ...?', 'Maxwell', 'Bernoulli', 'Newton', 'Shannon', 'b'),
(24, 'The Lockheed C-130 transport plane is also known as ...?', 'Atlas', 'Spartacus', 'Hercules', 'Zeus', 'c'),
(25, 'Trim controls on an airplane adjust ...?', 'yaw, roll or pitch', 'pitch, roll', 'roll, pitch or yaw', 'pitch, roll or yaw', 'd'),
(26, 'The boeing 747 first entered commerical service in ...?', '1950', '1960', '1970', '1980', 'c'),
(27, 'The most produced aircraft of all time is the Soviet World War II fighter the Ilyushin IL. True or False?', 'True', 'False', 'What you think', 'None', 'a'),
(28, 'Only 32 SR-71 advanced, long range, Mach 3+ strategic reconnaissance aircraft were ever built. 12 were lost to accidents. What was the aircrafts nickname?', 'Hawkeye', 'Night Prowler', 'Blackbird', 'The Phantom', 'c'),
(29, 'In terms of passangers carried the largest airline based in africa is ...?', 'South African Airways', 'Kenya Airways', 'EgyptAir', 'Tunisair', 'c'),
(30, 'As at November 2010 the fleet size of the largest airline, Delta, was ...?', '77 planes', '141 planes', '359 planes', '726 planes', 'd'),
(31, 'In 2010 there were approximately how many people in the Indian Army?', '1,000,000', '2,000,000', '800,000', '200,000', 'a'),
(32, 'Which one of these countries is the only one with less land area than India?', 'Russia', 'China', 'Iran', 'Brazil', 'c'),
(33, 'Which of these cities is not in Maharashtra?', 'Nashik', 'Kalyan-Dombivli', 'Lucknow', 'Navi Mumbai', 'c'),
(34, 'What film set in India won 8 Oscars in 2009?', 'Slumdog Millionaire', 'Doom Series', 'Robot', 'Dookudu', 'a'),
(35, 'I am found in Bangladesh, Nepal, and Bhutan. I am sometimes reffered to as Royal. There are about 2000 of me in the wild (as of 2010). The heaviest of me ever found was 258.6 kg. What Am I?', 'A Animal', 'Bengal Tiger', 'Tiger', 'Cheetha', 'b'),
(36, 'Indian company Western India Palm Refined Oils began vegetable oil trading in 1947, it later transformed itself into an IT powerhouse, what is it known as today?', 'Infosys', 'Satyam', 'TCS', 'WIPRO', 'd'),
(37, 'I was born on April 3rd, 1914, and died on June 27th, 2008 (aged 94). I am one of only two men to be appointed to the rank of Field Marshal in the Indian Army. I am _ _ _ Maneshaw?', 'Sam Manekshaw', 'King Luther', 'Martin Sam', 'Manekshaw Luther James', 'a'),
(38, 'I was constructed by the Mughal emperor Shahjahan in Delhi. My color makes up part of my name. I am a military building. What am I?', 'Green Buidling', 'Yellow Fort', 'Red Fort', 'Rainbow House', 'c'),
(39, 'Veegaland Park, Essel World and Nicco Park are Indian what?', 'Park', 'Indira Park', 'Theme Parks', 'None', 'c'),
(40, 'What is the web address of the Indian Department of Science and Technology?', 'dst.gov.in', 'gov.in', 'india.gov.in', 'bsnl.co.in', 'a'),
(41, 'Indian Rakesh Sharma has been somewhere very few people have been to, where has he been?', 'To the north pole ', 'To the top of Mount Everest', 'Into space', 'To the south pole', 'c'),
(42, 'Bankim Chandra Chatterjee, Premchand, Mulk Raj Anand and Vikram Seth are famous Indian what?', 'Fighter', 'Writers', 'Dictator', 'Normal Man', 'b'),
(43, 'Fauja Singh competed in what sporting event at age 92?', 'Gandhi', 'Martin', 'Marathon', 'Luther', 'c'),
(44, 'Where is a dogs Withers?', 'between it''s shoulders', 'on its legs', 'on its tail', 'inside its mouth', 'a'),
(45, 'In January 2010 the worlds oldest dog died. Otto was a Dachshund terrier cross from England, how old was he?', '20 years and 11 months', '16 years an 11 months', '28 years and 11 months', '19 years and 11 months', 'a'),
(46, 'what are Belton, Merle, Roan, Wheaten and Domino?', 'famous circus dogs', 'dog breeds', 'famous military dogs', 'dog colors', 'd'),
(47, 'Dew, Hare, Mops, Paper and Splay all relate to what part of a dog?', 'Legs', 'Mouth', 'Feet', 'Snout', 'c'),
(48, 'What from a dog can be used to uniquely identify it in the same way finger prints can be used to identify humans?', 'its smell', 'its paw print', 'its tongue print', 'its nose print', 'd'),
(49, 'What do dogs do in a Schutzhund competition?', 'retrieve balls', 'chase animals', 'attack padded people', 'jump into water', 'c'),
(50, 'Acording to Chinese culture 2006 was the year of the dog. When would the next year of the dog occur?', '2018', '2012', '2011', '2050', 'a'),
(51, 'A human has around 5,000,000 smelling cells, how many does an Alsation have?', '10,000,000', '110,000,000', '220,000,000', '770,000,000', 'c'),
(52, 'Which one of these is not a top menu item?', 'account', 'threads', 'new', 'ask', 'a');
