USE `rabit_test_db`;

INSERT INTO `users` (name)
VALUES ('TestUser1'), ('TestUser2'), ('TestUser3'), ('TestUser4'), ('TestUser5');

INSERT INTO `advertisements` (userid, title)
VALUES (1, 'TestAd1'), (2, 'TestAd2'), (1, 'TestAd3'), (1, 'TestAd4'), (1, 'TestAd5');

