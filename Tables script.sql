CREATE TABLE `carts`
(
  `user_id` int,
  `product_id` int,
  `quantity` int
);

CREATE TABLE `products`
(
  `id` int PRIMARY KEY,
  `name` varchar(255),
  `photo_path` varchar(255),
  `price` int,
  `quantity` int
);

CREATE TABLE `users`
(
  `id` int PRIMARY KEY,
  `username` varchar(255) UNIQUE,
  `email` varchar(255) UNIQUE,
  `password` varchar(255)
);

CREATE TABLE `tables`
(
  `id` int PRIMARY KEY,
  `user_id` int,
  `seats` int
);

ALTER TABLE `carts` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `products` ADD FOREIGN KEY (`id`) REFERENCES `carts` (`product_id`);

ALTER TABLE `users` ADD FOREIGN KEY (`id`) REFERENCES `tables` (`user_id`);
