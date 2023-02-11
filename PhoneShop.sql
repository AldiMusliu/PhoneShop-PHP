CREATE TABLE `products` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `display` varchar(150) NOT NULL,
  `hardware` varchar(255) NOT NULL,
  `camera` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `images` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_General_ci;

INSERT INTO `products` (`title`, `price`, `display`, `hardware`, `camera`, `battery`, `qty`, `images`) VALUES
('Samsung Galaxy S20 ', 540, '6.5 inches ', '6GB ', '12 megapixels; 8 MP; 12 MP', '4500 mAh', 20, 'Phone-Camera-Webcam-Gear-GettyImages-1241495650.webp'),
('Samsung Galaxy A20', 150, '6.4 inches', '3GB ', '13 MP, f/1.9, 28mm (wide), AF 5 MP, f/2.2, 12mm (ultrawide)', 'Li-Po 4000 mAh', 25, 'Phone-Camera-Webcam-Gear-GettyImages-1241495650.webp'),
('iPhone12 Pro Max', 1150, '6.4 inches', '6GB ', '12 MP, f/1.6, 26mm (wide), 1.7Âµm, dual pixel PDAF, sensor-shift stabilization (IBIS)', 'Li-Ion 3687 mAh', 21, 'Phone-Camera-Webcam-Gear-GettyImages-1241495650.webp'),
('Huawei P40 Pro', 250, '6.5 inches ', '8GB ', '50 MP, f/1.9, 23mm (wide), 1/1.28"', 'Li-Po 4200 mAh', 10, 'Phone-Camera-Webcam-Gear-GettyImages-1241495650.webp'),
('Xiaomi Mi 10T', 270, '6.7 inches', '8GB ', '108 MP, f/1.7, 26mm (wide)', 'Li-Po 5000 mAh', 10, 'Phone-Camera-Webcam-Gear-GettyImages-1241495650.webp'),
('Samsung Galaxy M51', 320, '6.7 inches', '8GB ', '64 megapixels; 5 MP; 12 MP', '7000 mAh', 11, 'Phone-Camera-Webcam-Gear-GettyImages-1241495650.webp');


CREATE TABLE `users` (
   `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_General_ci;


INSERT INTO `users` (`name`, `lastname`, `email`, `password`,`role`, `created_date`) VALUES
('aldiAdmin', 'Musliu', 'admin@1.com', '$2y$10$L2GvGSgXHtB3My4Pb7SaVer8Uxk2jOchJEsYc9kGiHUW8a.t4tthy', 'admin', '2023-02-06 12:34:43'),
('aldiUser', 'Musliu', 'aldi@musliu.com', '$2y$10$L2GvGSgXHtB3My4Pb7SaVer8Uxk2jOchJEsYc9kGiHUW8a.t4tthy', 'user', '2023-02-06 12:34:43');

