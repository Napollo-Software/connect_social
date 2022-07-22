<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Connection;
class ConnectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $connections=[
            ['id'=>'1','from'=> '2','to'=> '12', 'status'=>'1', 'deleted_at'=>NULL],
            ['id'=>'2', 'from'=> '2', 'to'=> '14', 'status'=>'1','deleted_at'=>NULL],
            ['id'=>'3', 'from'=> '2', 'to'=> '13', 'status'=>'1', 'deleted_at'=>NULL]
        ];
        foreach($connections as $item){
            Connection::create($item);
        }
    }
}
