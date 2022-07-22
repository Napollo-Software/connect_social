<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users=[
        [1, 'Super', 'Admin', 'super_admin', 'superadmin@connectsocial.com', '+92', '3001231231', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 1, NULL, NULL, 'coin.png', NULL, NULL, '2022-06-12 00:37:13', '2022-06-12 00:37:13'],
        [2, 'Parent', 'Tier', 'tier00', 'tier00@connectsocial.com', '+1', '3040647306', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '667966', 2, '1656675151blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 15:32:35', '2022-07-14 09:55:54'],
        [3, 'Tier1', 'A', 'tier01a', 'tier01_a@connectsocial.com', '+92', '3040647306', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', 3, '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 20:36:38', '2022-07-14 09:55:54'],
        [4, 'Tier1', 'B', 'tier01b', 'tier01_b@connectsocial.com', '+92', '3040647306', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', 4, '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 20:36:38', '2022-07-14 09:55:54'],
        [5, 'Tier1', 'C', 'tier01c', 'tier01_c@connectsocial.com', '+92', '3040647306', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', 5, '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 20:36:38', '2022-07-14 09:55:54'],
        [6, 'Tier2', 'A', 'tier02a', 'tier02_a@connectsocial.com', '+92', '3040647306', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', 6, '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 20:36:38', '2022-07-14 09:55:54'],
        [7, 'Tier2', 'B', 'tier02b', 'tier02_b@connectsocial.com', '+92', '3040647306', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', 7, '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 20:36:38', '2022-07-14 09:55:54'],
        [8, 'Tier2', 'C', 'tier02c', 'tier02_c@connectsocial.com', '+92', '3040647306', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', 8, '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 20:36:38', '2022-07-14 09:55:54'],
        [9, 'Friend', 'A', 'friend_a', 'friend_a@connectsocial.com', '+92', '3040647306', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', 9, '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 20:36:38', '2022-07-14 09:55:54'],
        [10, 'Friend', 'B', 'friend_b', 'friend_b@connectsocial.com', '+92', '3040647306', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', 10, '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 20:36:38', '2022-07-14 09:55:55'],
        [11, 'Friend', 'C', 'friend_c', 'friend_c@connectsocial.com', '+92', '3040647306', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', 11, '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 20:36:38', '2022-07-14 09:55:55'],
        [12, 'Connections', 'A', 'connections_a', 'connections_a@connectsocial.com', '+92', '3040647306', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', 12, '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 20:36:38', '2022-07-14 09:55:55'],
        [13, 'Connections', 'B', 'connections_b', 'connections_b@connectsocial.com', '+92', '3040647306', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', 13, '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 20:36:38', '2022-07-14 09:55:55'],
        [14, 'Connections', 'C', 'connections_c', 'connections_c@connectsocial.com', '+92', '3040647306', '2022-06-12 00:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', 14, '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 20:36:38', '2022-07-14 09:55:55']
       ];
       foreach($users as  $item)
       {
        User::create($item);
       }
    }
}
