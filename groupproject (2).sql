-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 05:36 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groupproject`
--
CREATE DATABASE IF NOT EXISTS `groupproject` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `groupproject`;

-- --------------------------------------------------------

--
-- Table structure for table `console`
--

CREATE TABLE `console` (
  `consoleID` int(5) NOT NULL,
  `consoleName` varchar(100) NOT NULL,
  `consoleLogo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `console`
--

INSERT INTO `console` (`consoleID`, `consoleName`, `consoleLogo`) VALUES
(1, 'PlayStation 1', 'empty'),
(2, 'PlayStation 2', 'empty'),
(3, 'PlayStation 3', 'empty'),
(4, 'PlayStation 4', 'empty'),
(5, 'GameCube', 'empty'),
(6, 'Nintendo Wii', 'empty'),
(7, 'Nintendo Switch', 'empty'),
(8, 'Xbox', 'empty'),
(9, 'Xbox360', 'empty'),
(10, 'XboxOne', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `gamegenre`
--

CREATE TABLE `gamegenre` (
  `genreID` int(11) NOT NULL,
  `genreName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gamegenre`
--

INSERT INTO `gamegenre` (`genreID`, `genreName`) VALUES
(1, 'Platformer'),
(2, 'Shooter'),
(3, 'Fighting'),
(4, 'Survival'),
(5, 'Sports'),
(6, 'Educational'),
(7, 'Action'),
(8, 'MMO'),
(9, 'RPG'),
(12, 'JRPG'),
(13, 'Racing'),
(14, 'Horror'),
(15, 'Indie'),
(16, 'Card');

-- --------------------------------------------------------

--
-- Table structure for table `gamelist`
--

CREATE TABLE `gamelist` (
  `gameID` int(5) NOT NULL,
  `gameName` varchar(100) NOT NULL,
  `gameImg` varchar(100) NOT NULL,
  `genreID` int(5) NOT NULL,
  `gameDesc` varchar(600) NOT NULL,
  `consoleID` int(5) NOT NULL,
  `releaseDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gamelist`
--

INSERT INTO `gamelist` (`gameID`, `gameName`, `gameImg`, `genreID`, `gameDesc`, `consoleID`, `releaseDate`) VALUES
(1, 'Call of Duty: WWII', 'gID1.jpg', 2, 'Call of Duty returns to its roots with Call of Duty: WWII-a breathtaking experience that redefines World War II for a new gaming generation. Land in Normandy on D-Day and battle across Europe through iconic locations in history\'s most monumental war. Experience classic Call of Duty combat, the bonds of camaraderie, and the unforgiving nature of war.', 1, 'October 2017'),
(2, 'The Last of Us Part II', 'gID2.jpg', 7, 'The next chapter in The Last of Us, we return to follow a older, angrier Ellie.', 4, ''),
(3, 'Sea of Thieves', 'gID3.jpg', 8, 'Yo ho, yo ho a pirate’s life for me. Or it will be in Sea of Thieves anyway. You must decide what kind of pirate you want to be, crew up, and set sail on various voyages. This is a multiplayer game set on the big blue.\r\n', 10, ''),
(4, 'Super Mario Odyssey', 'gID4.jpg', 1, 'Super Mario Odyssey should be a grand debut for Nintendo\'s mascot on the Switch, whisking Mario away to different worlds involving rainbow-colored cookery, dancing sprinkler robots, and the bustling metropolis of New Donk City. The platforming plumber also has a crucial new move, courtesy of Cappy, the spirit possessing his trademark red hat: he can possess any NPC in the world just by tossing his cap at them, opening up completely new avenues for gameplay.', 7, ''),
(5, 'Wolfenstein 2: The New Colossus', 'gID5.jpg', 7, 'B.J. Blazkowicz and Indiana Jones have similar sentiments regarding Nazis: they really hate those guys. But B.J. definitely has the edge when it comes to the Nazi body count left in his wake - and even when he\'s recovering from a coma and unable to stand, he\'ll still gladly crush Nazi skulls with his wheelchair wheels. Wolfenstein 2: The New Colossus has you taking back America from the established Nazi regime following the alternate history of The New Order, and that means gunning down and disemboweling every Nazi in sight. ', 10, ''),
(6, 'Xenoblade Chronicles 2', 'gID6.jpg', 12, 'Expect massive, open, and wholly alien landscapes to explore with a group of anime buddies wielding absurd, magical weaponry in highly-tactical real-time battles. That it\'s simply big isn\'t all that impressive considering how big pretty much every game is today, until you realize that the Switch will allow you to take this sprawling JRPG with you on the go - and that more than anything makes us very excited about what Xenoblade Chronicles 2 has to offer.', 7, ''),
(9, 'Assassin\'s Creed Origins', 'gID9.jpg', 11, ' You play as Bayek, one of the earliest Assassins, undertaking secret missions in a gorgeous, sunny and shining rendition of ancient Egypt. Developed by much of the same team that made Black Flag, Origins does away with tired AC elements like sync towers and minimap bloat to refocus on giant vistas to explore and satisfying action RPG combat to master. You can even ride a horse (or camel) into battle, trading in the stealth approach for a stylish entrance.', 4, ''),
(10, 'Sonic Forces', 'gID10.jpg', 1, 'The new Sonic game formerly known as simply "Project Sonic 2017" is looking appropriately speedy, but we\'re wondering if its 3D platforming can possibly live up to the retro, 2D greatness of Sonic Mania. A welcome hook this time around is the ability to play as a new hero of your own creation to team up with Modern and Retro Sonic, to the delight of fan artists everywhere. If you haven\'t already, Google search your name with "the Hedgehog" at the end to get a sneak preview of what that might look like.', 4, ''),
(11, 'Need for Speed: Payback ', 'gID11.jpg', 13, 'Take the over-the-top drama and lovable characters of the Fast and the Furious films, then sprinkle in plenty of slow-motion car crashes a la the beloved Burnout games. What you get is Need for Speed: Payback, an open-world racer with tons of cinematic flair mixed into its riveting chase scenes and breakneck getaways. There\'s also a heavy emphasis on car customization, as your three-character crew slowly amasses a giant garage full of sick rides.', 10, ''),
(12, 'Star Wars Battlefront 2 ', 'gID12.jpg', 2, 'The rebooted Star Wars Battlefront laid a fantastic foundation for an FPS that makes players feel like supporting troops (or iconic heroes and villains) within scenes from the films - but Star Wars Battlefront 2 seems like it\'ll be the real deal. On top of the expansive multiplayer conflicts - now with heroes pulled from all three film eras - this sequel includes a full-on single-player campaign, played from the perspective of Empire elite soldier Iden Versio. Also, space battles will be making their triumphant return, so you can zoom around blasting bogies in an X-Wing or TIE Fighter.', 10, ''),
(13, 'Hello Neighbor', 'gID13.jpg', 14, 'You play as a home intruder in Hello Neighbor, breaking into the suspicious house next door while the owner\'s still there (bad move) and praying that they don\'t discover you poking about in pursuit of dark secrets hiding behind the bolted-up basement door. The neighbor\'s AI will adapt itself to mess with your expectations from previous playthroughs, and it\'s entirely possible that you\'re the villain here, invading an innocent person\'s home through some misguided mission to expose them.', 10, ''),
(14, 'Knights and Bikes ', 'gID14.jpg', 15, ' Our two young heroines, Nessa and Demelza, explore their quaint island town brought to life by charming picture-book visuals, battling imaginary creatures with frisbees, water balloons, and all manner of improvised weaponry. Though it\'s playable solo, the ideal way to enjoy Knights and Bikes is in two-player co-op, where Nessa and Demelza will often devise spur-of-the-moment competitions - like racing their bikes to the next point of interest - that create fleeting moments of giddy rivalry with your co-op pal to see who can lay claim to those sweet bragging rights.', 4, ''),
(15, 'Gwent: The Witcher Card Game ', 'gID15.jpg', 16, 'There\'s a reason your collector\'s sense is tingling. By popular demand, CD Projekt is breaking out the fan-favorite card minigame from The Witcher 3: Wild Hunt into its own CCG so you can fall in love with it\'s two-player, turn-based strategy all over again. If you\'re not the competitive type, Gwent will have a full-fledged single-player campaign that could last upwards of 10 hours, with characters from the original RPG brought back for more voiceovers.', 4, ''),
(16, 'Call of Cthulhu', 'gID16.jpg', 9, 'The influence of H.P. Lovecraft\'s Cthulhu mythos creeps across the gaming landscape like the black tendrils of some otherworldly Elder God, so it\'s about time a game used modern hardware to take those nightmarish, existentially terrifying themes head-on. Made in the same style as 2005\'s Call of Cthulhu: Dark Corners of the Earth, this Call of Cthulhu reimagining is a first-person RPG that\'s equal parts investigation and delirium.', 10, ''),
(17, 'Mount & Blade 2: Bannerlord', 'gID17.jpg', 7, 'Whether on foot or on horseback, players take part in massive medieval skirmishes in a giant sandbox world, with intricate melee combat mechanics that take physics and positioning into account. Mount & Blade 2: Bannerlord promises the same scope and intense dueling, modernized with a much-needed facelift of its predecessors aging visuals. Anyone with a fondness for chaotic close-quarters combat should love wildly swinging a sword and shield in this sequel\'s monumental sieges, regardless of which side of the ramparts you\'re on.', 4, ''),
(18, 'Earth Defense Force 5 ', 'gID18.jpg', 7, 'This third-person shooter makes up for simplistic textures with a massive sense of scale, letting you run amok in giant, fully destructible cities overrun by colossal ants, killer robots, and Godzilla\'s distant relatives. This sequel - which promises revamped class abilities and wild new monster types - hasn\'t been confirmed for release outside of Japan, but we\'ve got our fingers crossed that a worldwide launch could happen if we chant "EDF! EDF!" often and loud enough.', 4, ''),
(19, 'FIFA 18', 'gID19.jpg', 5, 'FIFA is back and better than ever! The same great teams and players that you love, and an new and improved crowd that adds to the experience. In single player we also continue on the Alex Hunter story. There has never been a better time to get into FIFA.', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `gamenews`
--

CREATE TABLE `gamenews` (
  `articleID` int(11) NOT NULL,
  `gameID` int(11) NOT NULL,
  `articleName` varchar(100) NOT NULL,
  `articleDate` varchar(20) NOT NULL,
  `articleDesc` varchar(600) NOT NULL,
  `outletID` int(5) NOT NULL,
  `articleLink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gamenews`
--

INSERT INTO `gamenews` (`articleID`, `gameID`, `articleName`, `articleDate`, `articleDesc`, `outletID`, `articleLink`) VALUES
(1, 4, 'Super Mario Odyssey ', '', 'When playing Super Mario Odyssey you want to find out more. Curiosity is encouraged, and in deed this curiosity is it\'s own reward', 1, 'http://www.eurogamer.net/articles/2017-11-02-mario-odyssey-encourages-curiosity-and-what-higher-praise-is-there'),
(2, 12, 'Battlefront 2 Lootboxes', '0000-00-00', 'In light of the current loot box controversies EA have made changes to the Battlefront 2 loot crate and progression systems.', 1, 'http://www.eurogamer.net/articles/2017-11-01-ea-announces-star-wars-battlefront-2-loot-crate-and-progression-changes'),
(3, 9, 'Assassin\'s Creed Origins Sidequests', '0000-00-00', 'How to complete the sidequests that make up Assassin\'s Creed Origins.', 1, 'http://www.eurogamer.net/articles/2017-11-01-assassins-creed-origins-sidequests-4849'),
(4, 1, 'Call of Duty WWII Pre-Order', '0000-00-00', 'Find the best pre-order deals for Call of Duty WWII', 2, 'http://uk.ign.com/articles/2017/11/02/uk-daily-deals-preorder-call-of-duty-wwii-on-ps4-and-xbox-one-for-under-38'),
(5, 7, 'Super Mario Odyssey Review', '0000-00-00', 'The IGN review of Super Mario Odyssey', 2, 'http://uk.ign.com/articles/2017/10/26/super-mario-odyssey-review'),
(6, 5, 'Wolfenstein 2 Review', '0000-00-00', 'Kotaku\'s review of Wolfenstein 2: The New Colossus.', 3, 'http://www.kotaku.co.uk/2017/10/30/wolfenstein-ii-the-new-colossus-the-kotaku-review'),
(7, 15, 'Gwent keeps getting better', '0000-00-00', 'Kotaku\'s thoughts on Gwent, and their growing love for the card game, from the beloved game The Witcher 3.', 3, 'http://www.kotaku.co.uk/2017/11/01/gwent-keeps-getting-better'),
(8, 11, 'Need for Speed: The first 15 minutes', '0000-00-00', 'View the first 15 minutes of Need for Speed Payback', 4, 'https://www.polygon.com/videos/2017/11/1/16587910/need-for-speed-payback-gameplay-video');

-- --------------------------------------------------------

--
-- Table structure for table `newsoutlet`
--

CREATE TABLE `newsoutlet` (
  `outletID` int(11) NOT NULL,
  `outletName` varchar(25) NOT NULL,
  `outletLogo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsoutlet`
--

INSERT INTO `newsoutlet` (`outletID`, `outletName`, `outletLogo`) VALUES
(1, 'Eurogamer', 'empty'),
(2, 'IGN', 'empty'),
(3, 'Kotaku', 'empty'),
(4, 'Polygon', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `userfav`
--

CREATE TABLE `userfav` (
  `favID` int(5) NOT NULL,
  `userID` int(5) NOT NULL,
  `gameID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userfav`
--

INSERT INTO `userfav` (`favID`, `userID`, `gameID`) VALUES
(29, 26, 2),
(30, 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `dateJoined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `email`, `password`, `admin`, `dateJoined`) VALUES
(1, 'Christine', 'Sarakinis', 'cam109@hotmail.co.uk', 'admin1', 2, '2017-11-07 12:56:51'),
(3, 'Claire', 'King', 'clairecollking@gmail.com', 'admin3', 2, '2017-11-07 12:56:51'),
(4, 'Christopher', 'Sanderson', 'chsanderson97@gmail.com', 'admin4', 2, '2017-11-07 12:56:51'),
(7, 'New', 'User', 'new@user.com', 'newuser', 2, '2017-11-12 20:27:07'),
(26, 'sdfsfd', 'dsfsdf', 'asd@asd', 'asdasd', 1, '2017-11-24 09:48:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`consoleID`);

--
-- Indexes for table `gamegenre`
--
ALTER TABLE `gamegenre`
  ADD PRIMARY KEY (`genreID`);

--
-- Indexes for table `gamelist`
--
ALTER TABLE `gamelist`
  ADD PRIMARY KEY (`gameID`);

--
-- Indexes for table `gamenews`
--
ALTER TABLE `gamenews`
  ADD PRIMARY KEY (`articleID`);

--
-- Indexes for table `newsoutlet`
--
ALTER TABLE `newsoutlet`
  ADD PRIMARY KEY (`outletID`);

--
-- Indexes for table `userfav`
--
ALTER TABLE `userfav`
  ADD UNIQUE KEY `favID` (`favID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `console`
--
ALTER TABLE `console`
  MODIFY `consoleID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gamegenre`
--
ALTER TABLE `gamegenre`
  MODIFY `genreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `gamelist`
--
ALTER TABLE `gamelist`
  MODIFY `gameID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `gamenews`
--
ALTER TABLE `gamenews`
  MODIFY `articleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `newsoutlet`
--
ALTER TABLE `newsoutlet`
  MODIFY `outletID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `userfav`
--
ALTER TABLE `userfav`
  MODIFY `favID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
