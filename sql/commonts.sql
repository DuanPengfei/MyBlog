CREATE TABLE comments (
  id int(11) NOT NULL AUTO_INCREMENT,
  body text  NOT NULL,
  created_at datetime NOT NULL,
  post_id int(11) NOT NULL,
  PRIMARY KEY (id)
) ;

INSERT INTO `comments` (`id`, `body`, `created_at`, `post_id`) VALUES
(1, '我也喜欢电竞世界，那里也有我的高中回忆', '2014-10-16 21:22:23', 1),
(2, '现在的电竞世界，老人已不复存在了', '2014-10-18 09:52:10', 1),
(3, '当年的 DC 大魔王', '2014-10-18 09:55:31', 1),
(4, '喜欢 Miss', '2014-10-18 09:57:33', 1);
