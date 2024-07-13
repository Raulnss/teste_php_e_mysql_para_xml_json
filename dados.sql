CREATE DATABASE dados;
USE dados;
DROP TABLE IF EXISTS `dados`;
CREATE TABLE IF NOT EXISTS `dados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(140) NOT NULL,
  `user` varchar(140) NOT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);


INSERT INTO `dados` (`id`, `nome`, `user`, `email`, `senha`) VALUES
(1, 'john doe', 'superjohn', 'teste@teste.com', '12345678'),
(2, 'ninguem', 'aaa', 'bbbb', '2345');
COMMIT;

