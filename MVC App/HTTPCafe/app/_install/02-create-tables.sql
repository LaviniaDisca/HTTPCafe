CREATE TABLE `httpcafe`.`carts`
(
  `user_id` int,
  `product_id` int,
  `quantity` int
);

CREATE TABLE `httpcafe`.`products`
(
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `type` varchar(255),
  `name` varchar(255),
  `photo_path` varchar(255),
  `price` float,
  `stock` int
);

CREATE TABLE `httpcafe`.`users`
(
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(255) UNIQUE,
  `email` varchar(255) UNIQUE,
  `password` varchar(255),
  `last_activity` varchar(50)
);

CREATE TABLE `httpcafe`.`tables`
(
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `seats` int
);

CREATE TABLE `httpcafe`.`table_users`
(
  `table_id` int,
  `user_id` int
);


ALTER TABLE `httpcafe`.`carts` ADD FOREIGN KEY (`user_id`) REFERENCES `httpcafe`.`users` (`id`);

ALTER TABLE `httpcafe`.`carts` ADD FOREIGN KEY (`product_id`) REFERENCES `httpcafe`.`products` (`id`);

ALTER TABLE `httpcafe`.`table_users` ADD FOREIGN KEY (`table_id`) REFERENCES `httpcafe`.`tables` (`id`);

ALTER TABLE `httpcafe`.`table_users` ADD FOREIGN KEY (`user_id`) REFERENCES `httpcafe`.`users` (`id`);

