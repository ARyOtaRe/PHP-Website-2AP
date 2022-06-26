CREATE DATABASE `tutorial`;

USE`tutorial`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, "azerty", "John Doe", "12345"),
(2, "admin", "admin", "admin");


  CREATE TABLE `quotes`(
    `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `image` varchar(50) NOT NULL,
    `quote` varchar(255) NOT NULL,
    `name` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `quotes`(`id`,`image`,`quote`,`name`) VALUES
(1,"../Images/Quotes/Lara1.jpg","In our darkest moments, when life flashes before us, we find something; Something that keeps us going. Something that pushes us.","Lara Croft - Tomb Raider"),
(2,"../Images/Quotes/Lara2.jpg","The world is full of unanswered questions beyond all limits or reason... the answers await.","Lara Croft - Tomb Raider"),
(3,"../Images/Quotes/Wukong1.jpg","Every mistake is a lesson.","Wukong - League of Legends"),
(4,"../Images/Quotes/Irelia1.jpg","Never stop learning. There's always a form you don't know.","Irelia - League of Legends"),
(5,"../Images/Quotes/Yi.jpg","The focused mind can pierce through stone.","Master Yi - League of Legends"),
(6,"../Images/Quotes/Fighter.jpg","We are all our own worst enemy. But also, our best teacher.","Gouken - Super Street Fighter IV")
(7,"../Images/Quotes/Lara3.jpg","A famous explorer once said that the extraordinary is in what we do, not who we are.","Lara Croft - Tomb Raider"),
(8,"../Images/Quotes/FarCry3.jpg","Insanity is doing the exact same thing over and over again, expecting things to change.","Vaas - Far Cry 3"),
(9,"../Images/Quotes/Gman.jpg","The right man in the wrong place can make all the difference in the world.","G-man - Half Life 2"),
(10,"../Images/Quotes/Tidus.jpg","No matter how dark the night, the morning always comes.","Tidus - Final Fantasy X"),
(11,"../Images/Quotes/Kratos.jpg","Don't be sorry, Be Better.","Kratos - God of War"),
(12,"../Images/Quotes/Martson.jpg","If you find yourself in a hole, the first thing to do is stop digging.","John Martson - Red Dead Redemption"),
(13,"../Images/Quotes/Andrew.jpg","We all make choices in life, but in the end our choices make us.","Andrew Ryan - Bioshock"),
(14,"../Images/Quotes/Assassin.jpg","Wanting something does not give you the right to have it.","Ezio - Assassin's Creed 2"),
(15,"../Images/Quotes/Frank.jpg","You can't undo what you've already done, but you can face up to it.","Frank Coleridge - Silent Hill : Downpour");

