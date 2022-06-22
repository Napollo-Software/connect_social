
INSERT INTO `ambassador_details` (`id`, `user_id`, `about`, `city`, `state`, `relationship`, `joining`, `high_school`, `workplace`, `hobbies`, `cover_photo`, `created_at`, `updated_at`) VALUES
(1, 2, 'I am first ambassador of connect social. I came up with innovative ideas for connect social.', 'Faisalabad', 'Punjab', 'single', '2020-01-28', 'White rose school', 'Napollo', 'Chess', NULL, '2022-06-22 06:31:13', '2022-06-22 06:35:20');

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', '2022-06-14 17:46:58', '2022-06-14 17:46:58'),
(2, 'Merchant', 'merchant', '2022-06-15 01:48:31', '2022-06-15 01:48:31'),
(3, 'Ambassador', 'ambassador', '2022-06-15 01:48:42', '2022-06-15 01:48:42'),
(4, 'Admin', 'admin', '2022-06-15 01:48:53', '2022-06-15 01:48:53');

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `country_code`, `phone`, `email_verified_at`, `password`, `gender`, `role`, `email_code`, `phone_code`, `profile`, `email_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', 'super_admin', 'superadmin@connectsocial.com', '+92', '3001231231', '2022-06-12 20:37:13', '$2y$10$D4qxG3pfH3FkDbbkyGKRi.qdGdi0DcwKlqnnLKB6jtdW.c2fGj/.G', 'male', 1, NULL, NULL, 'super-admin.jpg', NULL, NULL, '2022-06-12 20:37:13', '2022-06-12 20:37:13'),
(2, 'Muhammad', 'Azeem', 'emazeem', 'azeem@napollo.net', '+92', '3040647306', '2022-06-22 06:33:01', '$2y$10$412KD55RGA3ClFOzqowChu6iEsjSss/F7PHB2zUY/xTl7CpG3gpEK', 'male', 3, '177037', '650900', '1655897467vid.jpg', NULL, NULL, '2022-06-22 06:31:13', '2022-06-22 06:34:10');
