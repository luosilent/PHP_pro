# PHP_pro
php-login-add-favorite-places
# MySQL
<pre><code>
CREATE DATABASE `fav`;

CREATE TABLE `tbl_accounts` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `displayName` text NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB;

ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `tbl_accounts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

CREATE TABLE tbl_places(place_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  place_name VARCHAR(20),
  addr_line1 VARCHAR(35),
  addr_line2 VARCHAR(35),
  open_time TIME,
  close_time TIME,
  add_info VARCHAR(35),
  add_info_url VARCHAR(35));
  
INSERT INTO tbl_places (place_name, addr_line1, addr_line2, open_time, close_time, add_info, add_info_url) VALUES
('hangzhou', 'xihu', 'tiantang', '00:00:00', '23:59:59', 'fav', 'https://test.com');
  
</code></pre>

## login
<http://localhost:8080/favplaces/view/login.php>
