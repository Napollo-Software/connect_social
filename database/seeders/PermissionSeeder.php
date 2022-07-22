<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            ['id' => '1',
            'name' => 'Create',
                'slug' => 'create'
            ],
            [
                'id' => '2',
                'name' => 'Edit',
                'slug' => 'edit'
            ],
            [
                'id' => '3',
                'name' => 'Delete',
                'slug' => 'delete'
            ],
        ];

        foreach ($permission as $item) {
            Permission::create($item);
        }
    }
}
