INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `phone`, `country_code`, `email_verified_at`, `password`, `gender`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'Super', 'Admin', 'super_admin', 'super@admin.com', '+923001231231','+92', NULL, '$2y$10$D4qxG3pfH3FkDbbkyGKRi.qdGdi0DcwKlqnnLKB6jtdW.c2fGj/.G', '', '1', NULL, '2022-06-13 21:37:13', '2022-06-13 21:37:13');


INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', '2022-06-15 03:46:58', '2022-06-15 03:46:58'),
(2, 'Super Ambassador', 'super-ambassador', '2022-06-15 11:48:31', '2022-06-15 11:48:31'),
(3, 'Ambassador', 'ambassador', '2022-06-15 11:48:42', '2022-06-15 11:48:42'),
(4, 'Admin', 'admin', '2022-06-15 11:48:53', '2022-06-15 11:48:53'),
(5, 'Merchant', 'merchant', '2022-06-15 11:49:04', '2022-06-15 11:49:04');