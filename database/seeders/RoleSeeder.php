<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=[
            ['id'=>'1', 'name'=>'Super Admin','slug'=> 'super-admin'],
            ['id'=>'2', 'name'=>'Merchant','slug'=> 'merchant'],
            ['id'=>'3', 'name'=>'Ambassador','slug'=> 'ambassador'],
            ['id'=>'4', 'name'=>'Admin','slug'=> 'admin']
        ];
       foreach($roles as $item)
       {
        Role::create($item);
       }
    }
}
