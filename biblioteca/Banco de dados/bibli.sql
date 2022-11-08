create database  biblioteca;
use biblioteca;

CREATE TABLE `books` (
  id int(11) NOT NULL,
  title varchar(500) NOT NULL,
  gender tinyint(1) NOT NULL,
  author varchar(500) NOT NULL,
  url_img varchar(500) NOT NULL,
  copies int(11) NOT NULL,
  copies_availetd int(11) NOT NULL,
  pages int(11) NOT NULL,
  created datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT 'user',
  `nr_card` varchar(100) NOT NULL COMMENT 'false => Homem, true => Mulher',
  `nr_license` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE `requests` (
  id int(11) NOT NULL,
  livro_id int(11) NOT NULL,
  user_id int(11) NOT NULL,
  data_request date NOT NULL ,
  data_withdraw date DEFAULT NULL,
  data_entrega date DEFAULT NULL,
  status int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_request_id` (`livro_id`) USING BTREE,
  ADD UNIQUE KEY `user_request_id` (`user_id`) USING BTREE;
  
  ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
  ALTER TABLE `requests`
  ADD CONSTRAINT `book_request_id` FOREIGN KEY (`livro_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `user_request_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;




