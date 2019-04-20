CREATE TABLE `carts`
(
  `id` int PRIMARY KEY,
  `user_id` int,
  `quantity` int
);

CREATE TABLE `products`
(
  `id` int PRIMARY KEY,
  `name` varchar(255),
  `photo_path` varchar(255),
  `price` int,
  `stock` int
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
  `seats` int
);

CREATE TABLE `table_users`
(
  `table_id` int,
  `user_id` int
);

CREATE TABLE `cart_products`
(
  `cart_id` int,
  `product_id` int
);

ALTER TABLE `carts` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `cart_products` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

ALTER TABLE `cart_products` ADD FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`);

ALTER TABLE `table_users` ADD FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`);

ALTER TABLE `table_users` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
