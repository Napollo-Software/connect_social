<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Friend;
class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $friends=[
            ['id'=>'1','from'=> '2','to'=> '9', 'status'=>'1', 'deleted_at'=>NULL],
            ['id'=>'2', 'from'=> '2', 'to'=> '10', 'status'=>'1','deleted_at'=>NULL],
            ['id'=>'3', 'from'=> '2', 'to'=> '11', 'status'=>'1', 'deleted_at'=>NULL]
        ];
        foreach($friends as $item){
            Friend::create($item);
        }
    }
}
