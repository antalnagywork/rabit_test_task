USE `rabit_test_db`;

ALTER TABLE `advertisements`
ADD CONSTRAINT `fk_userid` FOREIGN KEY(`userid`) REFERENCES `users`(`id`);

ALTER TABLE `users`
ADD CONSTRAINT unique_name UNIQUE (`name`);