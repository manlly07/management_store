CREATE TABLE `Suppliers` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) UNIQUE NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `created_at` DATETIME DEFAULT (now()),
  `is_active` boolean DEFAULT true
);

CREATE TABLE `Categories` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT "",
  `created_at` DATETIME DEFAULT (now()),
  `is_active` boolean DEFAULT true
);

CREATE TABLE `Products` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float DEFAULT 0,
  `description` varchar(255) DEFAULT "",
  `image` varchar(255) NOT NULL,
  `category_id` int NOT NULL,
  `created_at` DATETIME DEFAULT (now()),
  `is_active` boolean DEFAULT true
);

CREATE TABLE `Customers` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT "",
  `last_name` varchar(255) DEFAULT "",
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) DEFAULT "",
  `created_at` DATETIME DEFAULT (now()),
  `is_active` boolean DEFAULT true
);

CREATE TABLE `Carts` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int DEFAULT 1,
  `created_at` DATETIME DEFAULT (now())
);

CREATE TABLE `Orders` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `order_date` DATE DEFAULT (now()),
  `customer_id` int NOT NULL,
  `fullname` varchar(100) DEFAULT "",
  `email` varchar(100) DEFAULT "",
  `phone` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `total` float,
  `note` varchar(100) DEFAULT "",
  `status` ENUM ('pending', 'processing', 'shipped', 'delivered', 'cancelled') DEFAULT "processing",
  `payment_method` ENUM ('COD', 'OnlineBanking') DEFAULT "COD",
  `is_active` boolean DEFAULT true
);

CREATE TABLE `OrderDetails` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int DEFAULT 1,
  `price` float DEFAULT 0,
  `is_active` boolean DEFAULT true
);

CREATE TABLE `InvoiceShipments` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `Supplier_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) DEFAULT "",
  `shipment_date` DATE DEFAULT (now()),
  `total` float DEFAULT 0,
  `description` varchar(255) DEFAULT '',
  `status` ENUM ('pending', 'processing', 'shipped', 'delivered', 'cancelled') DEFAULT "processing",
  `shipping_method` ENUM ('COD', 'OnlineBanking') DEFAULT "COD",
  `is_active` boolean DEFAULT true
);

CREATE TABLE `InvoiceShipmentDetails` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `shipment_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int DEFAULT 1,
  `purchase_price` int DEFAULT 0,
  `is_active` boolean DEFAULT true
);

ALTER TABLE `Products` ADD FOREIGN KEY (`category_id`) REFERENCES `Categories` (`id`);

ALTER TABLE `Carts` ADD FOREIGN KEY (`customer_id`) REFERENCES `Customers` (`id`);

ALTER TABLE `Carts` ADD FOREIGN KEY (`product_id`) REFERENCES `Products` (`id`);

ALTER TABLE `Orders` ADD FOREIGN KEY (`customer_id`) REFERENCES `Customers` (`id`);

ALTER TABLE `OrderDetails` ADD FOREIGN KEY (`order_id`) REFERENCES `Orders` (`id`);

ALTER TABLE `OrderDetails` ADD FOREIGN KEY (`product_id`) REFERENCES `Products` (`id`);

ALTER TABLE `InvoiceShipments` ADD FOREIGN KEY (`Supplier_id`) REFERENCES `Suppliers` (`id`);

ALTER TABLE `InvoiceShipmentDetails` ADD FOREIGN KEY (`shipment_id`) REFERENCES `InvoiceShipments` (`id`);

ALTER TABLE `InvoiceShipmentDetails` ADD FOREIGN KEY (`product_id`) REFERENCES `Products` (`id`);
