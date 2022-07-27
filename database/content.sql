

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;



CREATE TABLE `cart` (
    `cart_id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `product` (
    `item_id` int(11) NOT NULL,
    `item_name` varchar(255) NOT NULL,
    `item_price` double(10,2) NOT NULL,
    `item_image` varchar(255) NOT NULL,
    `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product` (`item_id`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
      (1, 'Uno', 152.00, './assets/products/1.png', '2020-03-28 11:08:57'),
      (2, 'Chess', 122.00, './assets/products/2.png', '2020-03-28 11:08:57'),
      (3, 'Checkers', 122.00, './assets/products/3.png', '2020-03-28 11:08:57'),
      (4, 'Coup', 122.00, './assets/products/4.png', '2020-03-28 11:08:57'),
      (5, 'Reversi', 122.00, './assets/products/5.png', '2020-03-28 11:08:57');


CREATE TABLE `user` (
        `user_id` int(11) NOT NULL,
        `first_name` varchar(100) NOT NULL,
        `last_name` varchar(100) NOT NULL,
        `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
       (1, 'Rohan', 'Meruliya', '2022-06-28 13:07:17'),
       (2, 'Jil', 'Dhami', '2022-06-28 28:07:17');


CREATE TABLE `wishlist` (
        `cart_id` int(11) NOT NULL,
        `user_id` int(11) NOT NULL,
        `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `cart`
    ADD PRIMARY KEY (`cart_id`);

ALTER TABLE `product`
    ADD PRIMARY KEY (`item_id`);

ALTER TABLE `user`
    ADD PRIMARY KEY (`user_id`);

ALTER TABLE `cart`
    MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `product`
    MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `user`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

