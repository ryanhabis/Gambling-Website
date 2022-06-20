
CREATE TABLE `product` (
    `product_id` int(2) NOT NULL AUTO_INCREMENT,
    `product_name` varchar(30) DEFAULT NULL,
    `product_image_name` varchar(40) DEFAULT NULL,
    `product_description` varchar(200) DEFAULT NULL,
    `product_price` int(100) DEFAULT NULL,
    `quantity_in_stock` int(5) DEFAULT NULL,
    PRIMARY KEY (product_id)
                       ) ENGINE=InnoDB DEFAULT CHARSET=latin1

INSERT INTO `product` (`product_id`, `product_name`, `product_image_name`, `product_description`, `product_price`, `quantity_in_stock`) VALUES
(1, 'Car', 'car.jpg', 'winning prize', '500000000', 55),
(2, 'T-Shirt', 'tShirt.jpg', 'winning shirt', '50', 24),
(3, 'T-Shirt', 'tShirtTwo.jpg', 'winning shirt', '100', 13),
(4, 'Painting 1', 'paint1.jpg', 'the staff of life', '15000000', 221),
(5, 'Painting 2', 'paint2.jpg', 'melts into toast', '19500000', 143),
(6, 'Painting 3', 'paint3.jpg', 'sit comfortably', '25000000', 67),
(7, 'Painting 4', 'paint4.jpg', 'checkmate', '90000000', 88),
(8, 'Painting 5', 'paint5.jpg', 'warm it first', '50000000', 77)


-- users in the database
-- mary@b.c / m4ry (user_status: administrator: 1)
-- frances@d.e / fr4nc35 (user_status: ordinary: 0)
-- paul@f.g / p4ul (user_status: not decided yet: 2)

CREATE TABLE `member_table` (
`id` int(11) NOT NULL,
`user_name` varchar(254) NOT NULL,
`password_hashed` varchar(128) NOT NULL,
`user_address` varchar(75) NOT NULL,
`user_phone` int(15) NOT NULL,
`user_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `member_table` (`id`, `user_name`, `password_hashed`, `user_address`, `user_phone`, `user_status`) VALUES
(1, 'mary@b.c', '$2y$10$cvrOcn6Lo/3fUfr7D4H7wuTtCuyFJ/lXJ9ojrEbFgC0C0sudhroLa', 'Bo Peep Farm', 2147483647, 1),
(2, 'frances@d.e', '$2y$10$kyXw.ckHYSdGT5di4FQM8.5E9L2N44nQWA6dDc7Y9olLbIfksV..m', 'Hollywood', 2147483647, 0),
(3, 'paul@f.g', '$2y$10$7pjtT3oSaIGVg9ins9nTIu0zUqHabcTQfx/.1qnNXpDCuOeHXLtFO', 'Damascus', 346345345, 2);

-- This is test sql commands

SELECT id, user_name FROM member_table ORDER BY user_name ASC

DELETE FROM member_table where id = :whichComment

SELECT * FROM member_table WHERE user_name = :username

SELECT * FROM member_table WHERE user_name = :signupUsername

SELECT * FROM member_table

SELECT * FROM member_table WHERE id = :theCustomerToBeUpdated


UPDATE member_table SET
id=:id,
user_name=:user_name,
password_hashed=:password_hashed,
user_address=:user_address,
user_phone=:user_phone,
user_status=:user_status
WHERE id=:id