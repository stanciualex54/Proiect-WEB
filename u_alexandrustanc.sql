-- Adminer 4.5.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Accesorii`;
CREATE TABLE `Accesorii` (
  `ID` int(11) NOT NULL auto_increment,
  `Tip` varchar(50) collate utf8_unicode_ci NOT NULL,
  `Cantitate` int(11) NOT NULL,
  `Pret` int(11) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `Accesorii` (`ID`, `Tip`, `Cantitate`, `Pret`) VALUES
(1,	'Stickere',	50,	15),
(2,	'Cronometru',	50,	70),
(3,	'Lubrifiant',	50,	25);


INSERT INTO `Note` (`ID`, `IDStudent`, `Nota`, `Materie`) VALUES
(11,	2,	4,	'ipc'),
(10,	4,	2,	'ipc'),
(9,	3,	2,	'IPC'),
(8,	4,	7,	'Grafica'),
(7,	1,	10,	'IPC'),
(12,	8,	2,	'ipc');

DROP TABLE IF EXISTS `Special`;
CREATE TABLE `Special` (
  `ID` int(11) NOT NULL auto_increment,
  `Tip` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Cantitate` int(11) NOT NULL,
  `Pret` int(11) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `Special` (`ID`, `Tip`, `Cantitate`, `Pret`) VALUES
(2,	'Magic',	50,	85),
(3,	'Crazy',	50,	55),
(4,	'Megaminx',	50,	80),
(5,	'Piraminx',	50,	65),
(6,	'Mirror',	50,	60),
(7,	'Gear',	50,	65);

DROP TABLE IF EXISTS `Standard`;
CREATE TABLE `Standard` (
  `ID` int(11) NOT NULL auto_increment,
  `Tip1` varchar(30) collate utf8_unicode_ci NOT NULL,
  `Cantitate1` int(11) NOT NULL,
  `Pret` int(11) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `Standard` (`ID`, `Tip1`, `Cantitate1`, `Pret`) VALUES
(2,	'2x2',	50,	30),
(3,	'3x3',	50,	45),
(4,	'4x4',	50,	60),
(5,	'5x5',	50,	75),
(6,	'6x6',	50,	90),
(7,	'7x7',	50,	105);

INSERT INTO `Studenti` (`ID`, `Nume`, `Prenume`, `An`) VALUES
(1,	'Stanciu',	'Alexandru',	2),
(3,	'Tepes',	'Vlad',	3);

DROP TABLE IF EXISTS `Useri`;
CREATE TABLE `Useri` (
  `ID` int(11) NOT NULL auto_increment,
  `Nume` varchar(30) collate utf8_unicode_ci NOT NULL,
  `Prenume` varchar(30) collate utf8_unicode_ci NOT NULL,
  `Username` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Parola` varchar(255) collate utf8_unicode_ci NOT NULL default '',
  `Email` varchar(30) collate utf8_unicode_ci NOT NULL default '',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `Useri` (`ID`, `Nume`, `Prenume`, `Username`, `Parola`, `Email`) VALUES
(5,	'Stanciu',	'Alex',	'iolji',	'8c8722d4e45795de8deb',	'stanciualex45@gmail.com'),
(7,	'sandu',	'catalin',	'asdfgh',	'ba3253876aed6bc22d4a',	'ahahhh'),
(8,	'Popenta',	'Alexandru',	'p0pe',	'795f1cd6f072a5909d35',	'alex_popenta99@yahoo.com'),
(9,	'asd',	'asd',	'asd',	'b5ba77af1f7bda735894',	'zxc'),
(10,	'alex',	'sta',	'iolji',	'd404559f602eab6fd602',	'qwe'),
(13,	'123',	'123',	'nnn',	'5581307ac279c616e593',	'nnnn'),
(14,	'alex',	'alex',	'mmm',	'mmm',	'asd'),
(15,	'1ff1f',	'afg23f',	'qwerty',	'7315de75b6992d9eb6f64589aa691b0c',	'agwgeqg'),
(17,	'admin',	'admin',	'admin',	'9821a44ae13f2d54af4aac81d71cc09a',	'stanciualex45@gmail.com'),
(18,	'Emanuel',	'Popa',	'manupopa99',	'3dcfd2335aa69c34b7031d67c515f40a',	'manuteo2013@gmail.com'),
(19,	'sandu',	'catalin',	'p0o9i8',	'e10adc3949ba59abbe56e057f20f883e',	'sefu@la.banin'),
(21,	'banciu',	'clau',	'clausefa',	'f77a0c9915a0e7a23e9c6a96ac47074c',	'claudia@yahoo.com'),
(22,	'banciu',	'clau',	'claudia',	'f77a0c9915a0e7a23e9c6a96ac47074c',	'claudia@yahoo.com'),
(23,	'bosu',	'la',	'bani',	'202cb962ac59075b964b07152d234b70',	'123@gmail.com'),
(25,	'user',	'user',	'user',	'ee11cbb19052e40b07aac0ca060c23ee',	'user');

-- 2020-05-31 12:28:32
