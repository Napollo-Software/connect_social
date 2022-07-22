<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Referral;
class ReferralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $referrals=[
            [1, 2, 3, '2022-07-01 06:36:38', '2022-07-01 06:36:38'],
            [2, 2, 4, '2022-07-01 06:36:38', '2022-07-01 06:36:38'],
            [3, 2, 5, '2022-07-01 06:36:38', '2022-07-01 06:36:38'],
            [4, 3, 6, '2022-07-01 06:36:38', '2022-07-01 06:36:38'],
            [5, 3, 7, '2022-07-01 06:36:38', '2022-07-01 06:36:38'],
            [6, 3, 8, '2022-07-01 06:36:38', '2022-07-01 06:36:38']
        ];
        foreach($referrals as $item){
            Referral::create($item);
        }
    }
}
