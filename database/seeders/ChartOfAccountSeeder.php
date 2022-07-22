<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChartOfAccount;
class ChartOfAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chat_of_accounts=[
            ['id'=>'1', 'title'=>'Connect Social', 'group'=>'connect-social-account'],
            ['id'=>'2',  'title'=>'Parent Tier', 'group'=>'ambassador'],
            ['id'=>'3',  'title'=>'Tier1 A', 'group'=>'ambassador'],
            ['id'=>'4',  'title'=>'Tier1 B','group'=> 'ambassador'],
            ['id'=>'5',  'title'=>'Tier1 C', 'group'=>'ambassador'],
            ['id'=>'6',  'title'=>'Tier2 A','group'=> 'ambassador'],
            ['id'=>'7',  'title'=>'Tier2 B','group'=> 'ambassador'],
            ['id'=>'8',  'title'=>'Tier2 C','group'=> 'ambassador'],
            ['id'=>'9',  'title'=>'Friend A','group'=> 'ambassador'],
            ['id'=>'10', 'title'=> 'Friend B', 'group'=>'ambassador'],
            ['id'=>'11', 'title'=> 'Friend C', 'group'=>'ambassador'],
            ['id'=>'12',  'title'=>'Connections A', 'group'=>'ambassador'],
            ['id'=>'13',  'title'=>'Connections B','group'=> 'ambassador'],
            ['id'=>'14',  'title'=>'Connections C', 'group'=>'ambassador']
        ];
        foreach($chat_of_accounts as $item){
            ChartOfAccount::create($item);
        }
    }
}
