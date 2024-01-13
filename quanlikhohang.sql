-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 13, 2024 lúc 06:05 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlikhohang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `customer_id`, `product_id`, `quantity`, `created_at`) VALUES
(24, 4, 12, 2, '2023-12-22 22:45:17'),
(27, 4, 11, 2, '2023-12-22 22:57:30'),
(30, 4, 10, 2, '2023-12-22 23:07:45'),
(41, 12, 11, 1, '2024-01-08 14:49:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT '',
  `created_at` datetime DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `is_active`) VALUES
(1, 'Đồ uống có cồn', 'beer,....', '2023-12-06 17:42:07', 1),
(2, 'Nước ngọt', 'coke, pepsi, fanta', '2023-12-08 19:58:34', 1),
(3, 'Nước tăng lực', 'string', '2023-12-08 19:58:56', 1),
(4, 'Nước khoáng', 'lavie, aquafina', '2023-12-08 20:00:02', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT '',
  `last_name` varchar(255) DEFAULT '',
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) DEFAULT '',
  `created_at` datetime DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT 1,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `avt` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `user_name`, `password`, `first_name`, `last_name`, `address`, `phone`, `email`, `created_at`, `is_active`, `is_admin`, `avt`) VALUES
(1, 'duc', '$2y$10$ajUyDWJalYS44uU0CPgCpeztupryGcZpuxA1hMfs9tMqFqwJtPktu', 'Duc', 'Nguyen', 'Hà Đông, Hà Nội', '0762023368', 'ducn7128@gmail.com', '2023-11-24 18:41:23', 1, 1, '1704906533-networksystem.webp'),
(2, 'cuong', '$2y$10$/9MfdQ0TKFb52BMaw9/fzeHhjeX6c4SJHFDmbQ8ouuU3vXoynox7m', 'Dang', 'Cuong', 'Hà Nội', '0999345908', 'ngminducc@gmail.com', '2023-12-08 19:56:01', 1, 1, ''),
(3, 'anh', '$2y$10$jVyxt0kUXvZPQRuh7Mwo8OSzvoBfiSqLczkNzoNxZ4EOEk/KHEYaG', 'Hoang', 'Anh', 'Cầu Giấy, Hà Nội', '0987654321', '123@gmail.com', '2023-12-08 20:01:07', 1, 0, '1704906425-encryption.png'),
(4, 'Dat', '$2y$10$jOLRQRdKrgK9mW6U3Blrbenfk.ZqmwOYjIekeAcxx9YuOvIyREiz.', 'Dac', 'Dat', 'Tổ 7 Huyền Kỳ', '0762023369', 'dat@gmail.com', '2023-12-22 18:10:30', 1, 0, '1704906404-networksystem.webp'),
(5, 'Mixi', '$2y$10$tqlqyISQzR6dzJtt2HnMduEYh/4sRzwlMBLVWzs0olvaSmoEPzagK', 'Phung', 'Do', 'Victoria Van Phu, Ha Dong', '0762023367', 'mixi@gmail.com', '2023-12-22 23:19:53', 1, 0, '1704906249-softwareTesting.jpg'),
(11, 'CR7', '$2y$10$XIy7DKSMh7iy9J4.Youlje2Q9CILz7QJexCunM.Jm3.Sa71qfarGy', 'Cristiano', 'Ronaldo', 'Portugal ', '0762023360', 'cr7@gmail.com', '2023-12-31 10:50:57', 1, 1, '1704905900-1704877110-1700900685-anh_mat.jpg'),
(12, 'M10', '$2y$10$iTTB7fjwXW8.cJX3DjP6RulSWlFR2b4B6XXxm1pHTIQYlG0mGRjVS', 'Lionel', 'Messi', 'Argentina ', '0762023361', 'm10@gmail.com', '2023-12-31 10:55:38', 1, 0, ''),
(13, 'tinvo', '$2y$10$PZXMHb4OKVbnPfU7aW/wyeWGWxhEYyr9ddLOYQ9G1HHYCwmNCphE2', 'Tin', 'Vo', 'HCM', '0762023345', 'trantinvo@gmail.com', '2024-01-09 13:40:16', 1, 1, '1704906129-graph.png'),
(14, 'duc', '$2y$10$FNGam5uK7AspFYi12VGy2uupSEv01gVqBsx8kPCc9BuIJd7.s5FgG', 'minh', 'nguyen', 'Dương Nội, Hà Đông, Hà Nội', '0762023398', 'ducn71@gmail.com', '2024-01-11 00:08:16', 1, 0, '1704906515-optimise.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoiceshipmentdetails`
--

CREATE TABLE `invoiceshipmentdetails` (
  `id` int(11) NOT NULL,
  `shipment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT 1,
  `purchase_price` int(11) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `invoiceshipmentdetails`
--

INSERT INTO `invoiceshipmentdetails` (`id`, `shipment_id`, `product_id`, `quantity`, `purchase_price`, `is_active`) VALUES
(5, 10, 1, 50, 2000, 1),
(6, 12, 1, 50, 2000, 1),
(7, 13, 2, 50, 20000, 1),
(8, 13, 3, 20, 16000, 1),
(9, 14, 9, 100, 30000, 1),
(10, 15, 9, 100, 30000, 1),
(11, 16, 4, 30, 15000, 1),
(12, 16, 9, 10, 25000, 1),
(13, 17, 3, 30, 15000, 1),
(14, 18, 6, 30, 10000, 1),
(15, 19, 9, 50, 20000, 1),
(16, 20, 1, 15, 200000, 1),
(17, 21, 2, 100, 10000, 1),
(18, 22, 1, 4, 2000000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoiceshipments`
--

CREATE TABLE `invoiceshipments` (
  `id` int(11) NOT NULL,
  `Supplier_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) DEFAULT '',
  `shipment_date` date DEFAULT current_timestamp(),
  `total` float DEFAULT 0,
  `status` enum('chờ xử lý','đang xử lý','đã giao','đã huỷ') DEFAULT 'chờ xử lý',
  `shipping_method` enum('COD','OnlineBanking') DEFAULT 'COD',
  `is_active` tinyint(1) DEFAULT 1,
  `description` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `invoiceshipments`
--

INSERT INTO `invoiceshipments` (`id`, `Supplier_id`, `name`, `phone`, `email`, `shipment_date`, `total`, `status`, `shipping_method`, `is_active`, `description`) VALUES
(9, 1, 'duc', '', '', '2023-01-06', 144000, 'chờ xử lý', 'COD', 1, ''),
(10, 1, 'duc', '', '', '2023-02-06', 144000, 'chờ xử lý', 'OnlineBanking', 1, ''),
(12, 1, 'duc', '', '', '2023-06-06', 144000, 'đã giao', 'OnlineBanking', 1, ''),
(13, 3, 'Hoang Anh', '0987656789', '', '2023-08-08', 144000, 'đã giao', 'COD', 1, ''),
(14, 3, 'Leipzig ', '0123456789', '', '2023-10-16', 144000, 'đã giao', 'OnlineBanking', 1, ''),
(15, 3, 'Leipzig ', '0987654321', '', '2023-12-16', 3000000, 'đã giao', 'COD', 1, ''),
(16, 1, 'Phùng Thanh Độ', '0343747383', '', '2023-12-27', 700000, 'đã giao', 'COD', 1, ''),
(17, 4, 'Nguyễn Minh Đức', '0997767834', '', '2024-01-09', 450000, 'đã giao', 'COD', 1, ''),
(18, 2, 'Tin Vo', '0998785338', '', '2024-01-09', 300000, 'đã giao', 'COD', 1, ''),
(19, 2, 'duc', '0284249935', '', '2024-01-13', 1000000, 'đã giao', 'COD', 1, ''),
(20, 1, 'nguyễn minh', '099877376', '', '2024-01-13', 3000000, 'chờ xử lý', 'COD', 1, ''),
(21, 3, '', '', '', '2024-01-13', 1000000, 'chờ xử lý', 'COD', 1, ''),
(22, 1, 'cr7', '0762023368', '', '2024-01-13', 8000000, 'chờ xử lý', 'COD', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT 1,
  `price` float DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `quantity`, `price`, `is_active`) VALUES
(1, 2, 1, 2, 100000, 1),
(2, 2, 3, 4, 16000, 1),
(3, 4, 2, 5, 20000, 1),
(4, 4, 4, 10, 15000, 1),
(5, 6, 3, 5, 16000, 1),
(6, 8, 2, 10, 20000, 1),
(7, 10, 1, 1, 100000, 1),
(11, 16, 12, 2, 250000, 1),
(12, 19, 2, 2, 20000, 1),
(13, 21, 1, 1, 100000, 1),
(14, 22, 5, 4, 15000, 1),
(15, 23, 11, 1, 300000, 1),
(16, 24, 12, 1, 250000, 1),
(17, 25, 4, 5, 15000, 1),
(18, 26, 3, 5, 16000, 1),
(19, 27, 5, 6, 15000, 1),
(20, 28, 3, 4, 16000, 1),
(21, 29, 11, 1, 300000, 1),
(22, 30, 12, 1, 250000, 1),
(23, 31, 10, 1, 200000, 1),
(24, 32, 5, 8, 15000, 1),
(25, 33, 12, 1, 250000, 1),
(26, 34, 3, 5, 16000, 1),
(27, 34, 5, 3, 15000, 1),
(28, 34, 9, 4, 25000, 1),
(29, 35, 3, 10, 16, 1),
(30, 36, 3, 5, 16, 1),
(31, 37, 11, 2, 300000, 1),
(32, 37, 12, 1, 250000, 1),
(33, 37, 9, 6, 25000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_date` date DEFAULT current_timestamp(),
  `customer_id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT '',
  `email` varchar(100) DEFAULT '',
  `phone` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `total` float DEFAULT NULL,
  `note` varchar(100) DEFAULT '',
  `status` enum('chờ xử lý','đang xử lý','đã giao','đã huỷ') DEFAULT 'chờ xử lý',
  `payment_method` enum('COD','OnlineBanking') DEFAULT 'COD',
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `customer_id`, `fullname`, `email`, `phone`, `address`, `total`, `note`, `status`, `payment_method`, `is_active`) VALUES
(2, '2023-02-12', 1, 'Minh Đức Minh ', 'duc@gmail.com', '0762023368', 'Số 7, ngách 88/17, TDP Hòa Bình, Dương Nội, Hà Đông, Hà Nội', 189000, '{\"text\":\"Good luck\",\"account\":\"12322244490\",\"bankmaster\": \"Nguyen Minh Duc\"}', 'đã giao', 'OnlineBanking', 1),
(4, '2023-01-12', 1, 'Minh Đức Minh ', 'duc@gmail.com', '0762023368', 'Số 7, ngách 88/17, TDP Hòa Bình, Dương Nội, Hà Đông, Hà Nội', 175000, '{\"text\":\"Hi\",\"account\":\"0493422892984\",\"bankmaster\": \"Nguyen Minh Duc\"}', 'đã giao', 'COD', 1),
(6, '2023-02-12', 1, '', 'duc@gmail.com', '', '', 5000, '{\"text\":\"Hi\",\"account\":\"0493422893583583\",\"bankmaster\": \"Nguyen Minh Duc\"}', 'đã giao', 'OnlineBanking', 1),
(8, '2023-03-12', 1, '', 'duc@gmail.com', '', '', 125000, '{\"text\":\"Hi\",\"account\":\"049342289242253\",\"bankmaster\": \"Nguyen Minh Duc\"}', 'đã giao', 'OnlineBanking', 1),
(10, '2023-04-12', 1, '', 'duc@gmail.com', '', '', 25000, '{\"text\":\"Hi\",\"account\":\"04934228924649845\",\"bankmaster\": \"Nguyen Minh Duc\"}', 'đang xử lý', 'OnlineBanking', 1),
(16, '2023-05-13', 2, 'Dang Cuong', 'ngminducc@gmail.com', '0999345908', 'Hà Nội', 465000, '{\"text\":\"Hi\",\"account\":\"0493422892353853\",\"bankmaster\": \"Dang Van Cuong\"}', 'đã giao', 'OnlineBanking', 1),
(19, '2023-06-13', 3, 'Hoang Anh', '123@gmail.com', '0987654321', 'Hà Nội', 5000, '{\"text\":\"Hi\",\"account\":\"049342289338759\",\"bankmaster\": \"Dang Hoang Anh\"}', 'đã giao', 'OnlineBanking', 1),
(21, '2023-07-16', 3, 'Hoang Anh', '123@gmail.com', '0987654321', 'Yên Nghĩa', 65000, '{\"text\":\"hehe\",\"account\":\"049342282131\",\"bankmaster\":\"Dang Hoang Anh\"}', 'chờ xử lý', 'OnlineBanking', 1),
(22, '2023-08-16', 3, 'Hoang Anh', '123@gmail.com', '0987654321', 'Hà Nội', 50000, '{\"text\":\"Hi\",\"account\":\"049342282131\",\"bankmaster\":\"Dang Hoang Anh\"}', 'đã giao', 'OnlineBanking', 1),
(23, '2023-09-20', 3, 'Hoang Anh', '123@gmail.com', '0987654321', 'Hà Nội', 290000, '{\"text\":\"Hi\",\"account\":\"04934228923242\",\"bankmaster\":\"Dang Hoang Anh\"}', 'đã giao', 'OnlineBanking', 1),
(24, '2023-10-22', 3, 'Hoang Anh', '123@gmail.com', '0987654321', 'Hà Nội', 240000, '{\"text\":\"Hihi\",\"account\":\"313113232424\",\"bankmaster\":\"Dang Hoang Anh\"}', 'đã giao', 'OnlineBanking', 1),
(25, '2023-11-22', 4, 'Dac Dat', 'dat@gmail.com', '0762023369', 'Tổ 7 Huyền Kỳ', 65000, '{\"text\":\"ngu\",\"account\":\"313113232424\",\"bankmaster\":\"Nguyen Dac Dat\"}', 'đã giao', 'OnlineBanking', 1),
(26, '2023-12-22', 4, 'Dac Dat', 'dat@gmail.com', '0762023369', 'Tổ 7 Huyền Kỳ', 70000, '{\"text\":\"\",\"account\":\"\",\"bankmaster\":\"\"}', 'đã giao', 'OnlineBanking', 1),
(27, '2023-12-22', 4, 'Dac Dat', 'dat@gmail.com', '0762023369', 'Tổ 7 Huyền Kỳ', 80000, '{\"text\":\"\",\"account\":\"0762023369\",\"bankmaster\":\"Dac Dat\"}', 'đã giao', 'COD', 1),
(28, '2023-12-27', 3, 'Hoang Anh', '123@gmail.com', '0987654321', 'Hà Nội', 54000, '{\"text\":\"\",\"account\":\"0987654321\",\"bankmaster\":\"Hoang Anh\"}', 'đã giao', 'COD', 1),
(29, '2024-01-03', 12, 'Lionel Messi', 'm10@gmail.com', '0762023361', 'Argentina ', 290000, '{\"text\":\"\",\"account\":\"0762023361\",\"bankmaster\":\"Lionel Messi\"}', 'đã giao', 'COD', 1),
(30, '2024-01-03', 12, 'Lionel Messi', 'm10@gmail.com', '0762023361', 'Argentina ', 240000, '{\"text\":\"\",\"account\":\"0762023361\",\"bankmaster\":\"Lionel Messi\"}', 'đã giao', 'COD', 1),
(31, '2024-01-04', 12, 'Lionel Messi', 'm10@gmail.com', '0762023361', 'Argentina ', 190000, '{\"text\":\"\",\"account\":\"9704198526191432198\",\"bankmaster\":\"NGUYEN VAN A\"}', 'đã giao', 'OnlineBanking', 1),
(32, '2024-01-04', 12, 'Lionel Messi', 'm10@gmail.com', '0762023361', 'Argentina ', 110000, '{\"text\":\"\",\"account\":\"9704198526191432198\",\"bankmaster\":\"NGUYEN VAN A\"}', 'đã giao', 'OnlineBanking', 1),
(33, '2024-01-04', 12, 'Lionel Messi', 'm10@gmail.com', '0762023361', 'Argentina ', 240000, '{\"text\":\"\",\"account\":\"9704198526191432198\",\"bankmaster\":\"NGUYEN VAN A\"}', 'đã giao', 'OnlineBanking', 1),
(34, '2024-01-08', 3, 'Hoang Anh', '123@gmail.com', '0987654321', 'Cầu Giấy, Hà Nội', 215000, '{\"text\":\"\",\"account\":\"9704198526191432198\",\"bankmaster\":\"NGUYEN VAN A\"}', 'đã giao', 'OnlineBanking', 1),
(35, '2024-01-09', 13, 'Tin Võ', 'trantinvo@gmail.com', '0762023368', 'Số 7, ngách 88/17, La Nội, Dương Nội, Hà Đông, Hà Nội', 15000, '{\"text\":\"good luck\",\"account\":\"9704198526191432198\",\"bankmaster\":\"NGUYEN VAN A\"}', 'đã giao', 'OnlineBanking', 1),
(36, '2024-01-09', 3, 'Tin Vo', '123@gmail.com', '0762023368', 'Số 7, ngách 88/17, TDP Hòa Bình, Dương Nội, Hà Đông, Hà Nội', 70000, '{\"text\":\"good luck\",\"account\":\"9704198526191432198\",\"bankmaster\":\"NGUYEN VAN A\"}', 'đã giao', 'OnlineBanking', 1),
(37, '2024-01-13', 3, 'Hoang Anh', '123@gmail.com', '0987654321', 'Cầu Giấy, Hà Nội', 990000, '{\"text\":\"\",\"account\":\"9704198526191432198\",\"bankmaster\":\"NGUYEN VAN A\"}', 'đã huỷ', 'OnlineBanking', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT 1,
  `description` varchar(255) NOT NULL DEFAULT '',
  `quantity_in_stock` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `category_id`, `created_at`, `is_active`, `description`, `quantity_in_stock`) VALUES
(1, 'Whiskey ', 2000000, '1705078902-whiskey.webp', 1, '2023-12-06 17:43:36', 1, 'ngon', 120),
(2, 'Sting', 210000, '1705078734-sting.webp', 3, '2023-12-08 20:05:02', 1, 'ngon', 202),
(3, 'Pepsi', 250000, '1705078622-pepsi.webp', 2, '2023-12-08 20:05:37', 1, 'Pepsi lon 330ml có màu nâu đỏ đặc trưng, với các bọt khí nhỏ nổi đều trên bề mặt. Khi uống, sản phẩm có vị ngọt thanh, hơi chua nhẹ, kết hợp với vị đắng nhẹ của caffeine, mang đến cảm giác sảng khoái, giải tỏa căng thẳng, mệt mỏi.', 106),
(4, 'Cocacola ', 230000, '1705078290-cocacola.jpg', 2, '2023-12-08 20:06:03', 1, 'hello', 50),
(5, 'Fanta', 220000, '1705078318-fanta.webp', 2, '2023-12-12 21:08:12', 1, 'ngon', 89),
(6, 'Aquafina', 100000, '1705078218-aquafina.webp', 4, '2023-12-12 21:09:44', 1, 'nước tinh khiết', 130),
(7, 'Lavie', 95000, '1705078370-lavie.png', 4, '2023-12-12 21:10:40', 1, 'ngon', 100),
(8, 'TH True Water', 110000, '1705078815-thtruemilk.jpg', 4, '2023-12-12 21:13:22', 1, 'ngon', 100),
(9, 'Red Bull', 400000, '1705078662-redbull.jpeg', 3, '2023-12-12 21:14:53', 1, 'ngon', 66),
(10, 'Vodka', 1200000, '1705078839-vodka.webp', 1, '2023-12-12 21:16:16', 1, 'ngon', 99),
(11, 'Gin', 1500000, '1705078348-gin.jpg', 1, '2023-12-12 21:17:03', 1, 'ngon', 100),
(12, 'Vermouth', 1300000, '1705078773-vermouth.webp', 1, '2023-12-13 12:04:54', 1, 'chris vinyard', 98);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `phone`, `created_at`, `is_active`) VALUES
(1, 'Tiktok', 'Số 7, ngách 88/17 La Nội, Dương Nội, Hà Đông, Hà Nội', '0762023368', '2023-12-06 17:44:53', 1),
(2, 'Long Hai', 'Hải Dương', '0762023369', '2023-12-08 20:02:22', 1),
(3, 'Redbull', 'München ', '0855326367', '2023-12-08 20:03:16', 1),
(4, 'Cocacola ', 'Los Angeles, America', '0762023366', '2023-12-08 20:04:12', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `invoiceshipmentdetails`
--
ALTER TABLE `invoiceshipmentdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipment_id` (`shipment_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `invoiceshipments`
--
ALTER TABLE `invoiceshipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Supplier_id` (`Supplier_id`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `invoiceshipmentdetails`
--
ALTER TABLE `invoiceshipmentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `invoiceshipments`
--
ALTER TABLE `invoiceshipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `invoiceshipmentdetails`
--
ALTER TABLE `invoiceshipmentdetails`
  ADD CONSTRAINT `invoiceshipmentdetails_ibfk_1` FOREIGN KEY (`shipment_id`) REFERENCES `invoiceshipments` (`id`),
  ADD CONSTRAINT `invoiceshipmentdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `invoiceshipments`
--
ALTER TABLE `invoiceshipments`
  ADD CONSTRAINT `invoiceshipments_ibfk_1` FOREIGN KEY (`Supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Các ràng buộc cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
