TRUNCATE `users`;
INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `country_code`, `phone`, `email_verified_at`, `password`, `gender`, `role`, `email_code`, `phone_code`, `profile`, `email_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', 'super_admin', 'superadmin@connectsocial.com', '+92', '3001231231', '2022-06-13 01:37:13', '$2y$10$D4qxG3pfH3FkDbbkyGKRi.qdGdi0DcwKlqnnLKB6jtdW.c2fGj/.G', 'male', 1, NULL, NULL, 'super-admin.jpg', NULL, NULL, '2022-06-13 01:37:13', '2022-06-13 01:37:13'),
(2, 'Muhammad', 'Azeem', 'emazeem07', 'emazeem07@gmail.com', '+92', '3040647306', '2022-06-17 07:14:42', '$2y$10$ihHvXI.s1XIEhcVqH0GpDuuj2gSF04ZLveRHD4A7lLUt9S9Et0aY2', 'male', 3, '267658', '150340', '16554860501655392296bg-01.png', NULL, NULL, '2022-06-17 07:14:14', '2022-06-17 07:14:42');


TRUNCATE `roles`;
INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', '2022-06-14 22:46:58', '2022-06-14 22:46:58'),
(2, 'Merchant', 'merchant', '2022-06-15 06:48:31', '2022-06-15 06:48:31'),
(3, 'Ambassador', 'ambassador', '2022-06-15 06:48:42', '2022-06-15 06:48:42'),
(4, 'Admin', 'admin', '2022-06-15 06:48:53', '2022-06-15 06:48:53');