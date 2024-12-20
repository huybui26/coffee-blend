-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2024 lúc 04:22 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `coffee-blend`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `adminname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `adminname`, `email`, `password`, `created_at`) VALUES
(1, 'admin.first', 'admin.first@gmail.com', '$2y$10$nlhdvRV2AtBVcGwKkSzBM.qIh3rVVGzlyLDWHvNge9.8ZMPY9ZvMi', '2023-05-06 13:15:43'),
(3, 'admins2', 'admins2@gmail.com', '$2y$10$7ilRNcJ7RK6ny8WOT0q6Z.mSW8pu3NEY2c.a25euON4kdef.uJXai', '2024-12-09 16:19:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Pending',
  `user_id` int(7) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `pro_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `name`, `image`, `price`, `pro_id`, `description`, `quantity`, `user_id`, `created_at`) VALUES
(41, 'Cà Phê Capuccino', 'menu-3.jpg', '6', 1, 'Cà phê Cappuccino của Saltmate được pha chế từ cà phê espresso đậm đà, kết hợp với sữa hơi đánh bọt mềm mịn, tạo nên một hương vị hài hòa, ngọt ngào, lý tưởng cho những ai yêu thích sự cân bằng giữa cà phê và sữa.', 1, 5, '2024-12-09 15:01:42'),
(42, 'Cà Phê Sữa Đá', 'menu-2.jpg', '7', 2, 'Cà phê Sữa Đá của Saltmate mang đến sự kết hợp tuyệt vời giữa cà phê espresso đậm đà và sữa đặc ngọt ngào, hòa quyện cùng đá lạnh, tạo nên một thức uống mát lạnh, thơm ngon, lý tưởng cho những ngày nóng bức.', 1, 5, '2024-12-12 14:01:35'),
(43, 'Bánh Dâu Tằm Mật Ong', 'dessert-1.jpg', '4', 3, 'Bánh Dâu Tằm Mật Ong của Saltmate là sự kết hợp hoàn hảo giữa hương vị ngọt ngào của dâu tằm tươi và mật ong tự nhiên, tạo nên món bánh mềm mịn, thơm ngon, mang đến trải nghiệm ngọt ngào và độc đáo.\r\n', 1, 5, '2024-12-12 14:01:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `town` varchar(200) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` varchar(200) NOT NULL,
  `total_price` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `state`, `street_address`, `town`, `zip_code`, `phone`, `user_id`, `status`, `total_price`, `created_at`) VALUES
(9, 'tùng', 'nguyễn', 'VietNam', 'hà đông', 'hà nội', '100', '123', 5, 'Đã giao', 20, '2024-12-12 14:02:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `type` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`, `type`, `created_at`) VALUES
(1, 'Cà Phê Capuccino', 'menu-3.jpg', 'Cà phê Cappuccino của Saltmate được pha chế từ cà phê espresso đậm đà, kết hợp với sữa hơi đánh bọt mềm mịn, tạo nên một hương vị hài hòa, ngọt ngào, lý tưởng cho những ai yêu thích sự cân bằng giữa cà phê và sữa.', '6', 'drink', '2023-05-04 10:40:16'),
(2, 'Cà Phê Sữa Đá', 'menu-2.jpg', 'Cà phê Sữa Đá của Saltmate mang đến sự kết hợp tuyệt vời giữa cà phê espresso đậm đà và sữa đặc ngọt ngào, hòa quyện cùng đá lạnh, tạo nên một thức uống mát lạnh, thơm ngon, lý tưởng cho những ngày nóng bức.', '7', 'drink', '2023-05-04 10:40:16'),
(3, 'Bánh Dâu Tằm Mật Ong', 'dessert-1.jpg', 'Bánh Dâu Tằm Mật Ong của Saltmate là sự kết hợp hoàn hảo giữa hương vị ngọt ngào của dâu tằm tươi và mật ong tự nhiên, tạo nên món bánh mềm mịn, thơm ngon, mang đến trải nghiệm ngọt ngào và độc đáo.\r\n', '4', 'dessert', '2023-05-06 09:08:34'),
(4, 'Pancake', 'dessert-2.jpg', 'Pancake của Saltmate được làm từ nguyên liệu tươi ngon, mềm xốp, ăn kèm với siro hoặc trái cây tươi, mang đến một món ăn sáng hoặc tráng miệng nhẹ nhàng, thơm ngon và đầy năng lượng.\r\n\r\n', '3', 'dessert', '2023-05-06 09:08:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `review` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `username`, `created_at`) VALUES
(1, 'Saltmate là nơi tôi luôn tìm thấy sự thư giãn và hương vị cà phê tuyệt vời.', 'user2@gmail.com', '2023-05-06 10:42:11'),
(2, 'Không gian ấm cúng, đồ uống chất lượng, và nhân viên cực kỳ dễ thương!', 'user2@gmail.com', '2023-05-06 10:45:39'),
(3, 'Đồ uống ngon!', 'huy1', '2024-12-09 16:40:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(3, 'user2@gmail.com', 'user2@gmail.com', '$2y$10$nlhdvRV2AtBVcGwKkSzBM.qIh3rVVGzlyLDWHvNge9.8ZMPY9ZvMi', '2023-05-02 12:00:10'),
(5, 'huy1', 'huy1@gmail.com', '$2y$10$qvrhkq6u9eV7Z/aoYSxXz.Ml9veMe.VCsfavwMIQz51N2z1ZEhUZu', '2024-12-05 16:34:03');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
