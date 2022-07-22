<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           // PermissionSeeder::class,
            RoleSeeder::class,
            // UserSeeder::class,
             AmbassadorDetailsSeeder::class,
             ChartOfAccountSeeder::class,
             ConnectionSeeder::class,
            // FriendSeeder::class,
            // PostSeeder::class,
            // ReferralSeeder::class,

        ]);
    }
}
