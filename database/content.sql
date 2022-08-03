SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;

CREATE TABLE `product` (
    `item_id` int(11) AUTO_INCREMENT PRIMARY KEY,
    `item_name` varchar(255) NOT NULL,
    `item_price` double(10,2) NOT NULL,
    `item_image` varchar(255) NOT NULL,
    `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product` (`item_id`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
      (1, 'Uno', 15.00, './img/uno.jpg', '2020-03-28 11:08:57'),
      (2, 'Chess', 25.00, './img/chess.jpg', '2020-03-28 11:08:57'),
      (3, 'Checkers', 55.00, './img/checkers.jpg', '2020-03-28 11:08:57'),
      (4, 'Coup', 40.00, './img/coup.jpg', '2020-03-28 11:08:57'),
      (5, 'Reversi', 30.00, './img/reversi.jpg', '2020-03-28 11:08:57'),
      (6, 'Arkham Horror', 35.00, './img/first.jpg', '2020-03-28 11:08:57'),
      (7, 'Boggle', 65.00, './img/Boggle.jpg', '2020-03-28 11:08:57'),
      (8, 'Carcassonne', 65.00, './img/Carcassonne.jpg', '2020-03-28 11:08:57'),
      (9, 'ConnectFour', 100.00, './img/ConnectFour.jpg', '2020-03-28 11:08:57'),
      (10, 'ChutesAndLadders', 50.00, './img/ChutesAndLadders.jpg', '2020-03-28 11:08:57'),
      (11, 'Cranium', 25.00, './img/Cranium.jpg', '2020-03-28 11:08:57'),
      (12, 'Dominoes', 75.00, './img/Dominoes.jpg', '2020-03-28 11:08:57'),
      (13, 'Dont Break The Ice', 45.00, './img/DontBreakTheIce.jpeg', '2020-03-28 11:08:57'),
      (14, 'HungryHungryHippos', 65.00, './img/HungryHungryHippos.jpg', '2020-03-28 11:08:57'),
      (15, 'Jenga', 55.00, './img/Jenga.jpg', '2020-03-28 11:08:57'),
      (16, 'MasterMind', 55.00, './img/MasterMind.jpg', '2020-03-28 11:08:57'),
      (18, 'MouseTrap', 55.00, './img/MouseTrap.jpg', '2020-03-28 11:08:57'),
      (19, 'Qwirkle', 25.00, './img/Qwirkle.jpg', '2020-03-28 11:08:57'),
      (20, 'Twister', 30.00, './img/Twister.jpg', '2020-03-28 11:08:57'),
      (22, 'Apple To Apples', 40.00, './img/apples to apples.jpeg', '2020-03-28 11:08:57'),
      (23, 'catch', 50.00, './img/catch.jpg', '2020-03-28 11:08:57'),
      (24, 'Mad Gab', 55.00, './img/Mad gab.jpg', '2020-03-28 11:08:57'),
      (25, 'password', 60.00, './img/password.jpg', '2020-03-28 11:08:57'),
      (26, 'pictionary', 65.00, './img/pictionary.jpg', '2020-03-28 11:08:57'),
      (27, 'scateregories', 70.00, './img/scateregories.jpg', '2020-03-28 11:08:57'),
      (29, 'Sequence', 75.00, './img/Sequence.jpg', '2020-03-28 11:08:57'),
      (30, 'sorry', 45.00, './img/sorry.jpg', '2020-03-28 11:08:57'),
      (31, 'Taboo', 30.00, './img/Taboo.jpeg', '2020-03-28 11:08:57'),
      (32, 'Ticket To Ride', 35.00, './img/Ticket to ride.jpg', '2020-03-28 11:08:57'),
      (33, 'trafficjam', 85.00, './img/trafficjam.jpg', '2020-03-28 11:08:57'),
      (34, 'Trivial Pursuit', 90.00, './img/Trivial Pursuit.jpg', '2020-03-28 11:08:57'),
      (35, 'Agricola', 55.00, './img/Agricola.jpeg', '2020-03-28 11:08:57'),
      (36, 'Alix & Allies', 45.00, './img/Alix & Allies.jpeg', '2020-03-28 11:08:57'),
      (37, 'Backgammon', 60.00, './img/Backgammon.jpeg', '2020-03-28 11:08:57'),
      (38, 'Battleship', 30.00, './img/Battleship.jpeg', '2020-03-28 11:08:57'),
      (39, 'Blokus', 45.00, './img/Blokus.jpeg', '2020-03-28 11:08:57'),
      (40, 'Candy Land', 65.00, './img/Candy Land.jpeg', '2020-03-28 11:08:57'),
      (41, 'Clue', 35.00, './img/Clue.jpeg', '2020-03-28 11:08:57'),
      (42, 'Monopoly', 40.00, './img/Monopoly.jpeg', '2020-03-28 11:08:57'),
      (43, 'Risk', 20.00, './img/Risk.jpeg', '2020-03-28 11:08:57'),
      (44, 'Scrabble', 30.00, './img/Scrabble.jpeg', '2020-03-28 11:08:57'),
      (46, 'Stratego', 60.00, './img/Stratego.jpeg', '2020-03-28 11:08:57'),
      (47, 'The Game Of Life', 80.00, './img/TheGameOfLife.jpeg', '2020-03-28 11:08:57'),
      (48, 'PowerGrid', 75.00, './img/PowerGrid.jpg', '2020-03-28 11:08:57'),
      (49, 'Sorry!', 85.00, './img/Sorry!.jpg', '2020-03-28 11:08:57'),
      (50, 'The Game Of Life', 35.00, './img/TheGameOfLife.jpg', '2020-03-28 11:08:57');

# valid user_types: 'c' is customer
#                   'a' is admin
#                   ...more if we need it

CREATE TABLE `user` (
        `user_id` int(11) AUTO_INCREMENT PRIMARY KEY,
        `user_type` char(1) DEFAULT 'c',
        `first_name` varchar(100) NOT NULL,
        `last_name` varchar(100) NOT NULL,
        `email` varchar(100) NOT NULL UNIQUE,
        `username`  varchar(100) NOT NULL UNIQUE,
        `password` varchar(100) NOT NULL,
        `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `cart` (
        `cart_id` int(11) AUTO_INCREMENT PRIMARY KEY,
        `user_id` int(11) NOT NULL,
        `item_id` int(11) NOT NULL,
        FOREIGN KEY (user_id) REFERENCES user(user_id),
        FOREIGN KEY (item_id) REFERENCES product(item_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `wishlist` (
        `cart_id` int(11) NOT NULL,
        `user_id` int(11) NOT NULL,
        `item_id` int(11) NOT NULL,
        FOREIGN KEY (cart_id) REFERENCES cart(cart_id),
        FOREIGN KEY (user_id) REFERENCES user(user_id),
        FOREIGN KEY (item_id) REFERENCES product(item_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;

