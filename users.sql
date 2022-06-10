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
(3, "jeandosantos", "Jean Dos Santos", "12345");


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
(6,"../Images/Quotes/Fighter.jpg","We are all our own worst enemy. But also, our best teacher.","Gouken - Super Street Fighter IV");

