
INSERT INTO `ambassador_details` (`id`, `user_id`, `about`, `city`, `state`, `relationship`, `joining`, `high_school`, `workplace`, `hobbies`, `cover_photo`, `created_at`, `updated_at`) VALUES
(1, 2, 'I am first ambassador of connect social. I came up with innovative ideas for connect social.', 'Faisalabad', 'Punjab', 'single', '2020-01-28', 'White rose school', 'Napollo', 'Chess', NULL, '2022-06-22 06:31:13', '2022-06-22 06:35:20');

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', '2022-06-14 17:46:58', '2022-06-14 17:46:58'),
(2, 'Merchant', 'merchant', '2022-06-15 01:48:31', '2022-06-15 01:48:31'),
(3, 'Ambassador', 'ambassador', '2022-06-15 01:48:42', '2022-06-15 01:48:42'),
(4, 'Admin', 'admin', '2022-06-15 01:48:53', '2022-06-15 01:48:53');


INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `country_code`, `phone`, `email_verified_at`, `password`, `gender`, `role`, `email_code`, `phone_code`, `profile`, `email_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', 'super_admin', 'superadmin@connectsocial.com', '+92', '3001231231', '2022-06-12 10:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 1, NULL, NULL, 'super-admin.jpg', NULL, NULL, '2022-06-12 10:37:13', '2022-06-12 10:37:13'),
(2, 'Parent', 'Tier', 'tier00', 'tier00@connectsocial.com', '+1', '3040647306', '2022-06-12 10:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '667966', '799931', '1656675151blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:32:35', '2022-07-01 01:33:09'),
(3, 'Tier1', 'A', 'tier01a', 'tier01_a@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(4, 'Tier1', 'B', 'tier01b', 'tier01_b@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(5, 'Tier1', 'C', 'tier01c', 'tier01_c@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(6, 'Tier2', 'A', 'tier02a', 'tier02_a@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(7, 'Tier2', 'B', 'tier02b', 'tier02_b@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(8, 'Tier2', 'C', 'tier02c', 'tier02_c@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(9, 'Friend', 'A', 'friend_a', 'friend_a@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(10, 'Friend', 'B', 'friend_b', 'friend_b@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(11, 'Friend', 'C', 'friend_c', 'friend_c@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(12, 'Connections', 'A', 'connections_a', 'connections_a@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(13, 'Connections', 'B', 'connections_b', 'connections_b@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(14, 'Connections', 'C', 'connections_c', 'connections_c@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38');


