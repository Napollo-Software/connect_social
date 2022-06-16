TRUNCATE `users`;

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `country_code`, `phone`, `email_verified_at`, `password`, `gender`, `role`, `email_code`, `phone_code`, `profile`, `email_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', 'super_admin', 'super@admin.com', '+92', '3001231231', '2022-06-13 11:37:13', '$2y$10$D4qxG3pfH3FkDbbkyGKRi.qdGdi0DcwKlqnnLKB6jtdW.c2fGj/.G', 'male', 1, NULL, NULL, 'super-admin.jpg', NULL, NULL, '2022-06-13 11:37:13', '2022-06-13 11:37:13'),
(2, 'Jeff', 'Dyck', 'connectsocial', 'devops@napollo.net', '+1', '3459133777', '2022-06-16 13:43:27', '$2y$10$LCm8LOUFWokk5jf9FUX1l.zd.6epYzsu784Vc3xXBlko40vLE6OC.', 'male', 2, '912928', '636228', '1655404945super-admin.jpg', NULL, NULL, '2022-06-16 13:42:29', '2022-06-16 13:43:27');

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', '2022-06-15 03:46:58', '2022-06-15 03:46:58'),
(2, 'Super Ambassador', 'super-ambassador', '2022-06-15 11:48:31', '2022-06-15 11:48:31'),
(3, 'Ambassador', 'ambassador', '2022-06-15 11:48:42', '2022-06-15 11:48:42'),
(4, 'Admin', 'admin', '2022-06-15 11:48:53', '2022-06-15 11:48:53'),
(5, 'Merchant', 'merchant', '2022-06-15 11:49:04', '2022-06-15 11:49:04');