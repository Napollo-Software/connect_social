<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $posts=[
        ['id'=>'1', 2, 'Testing post from Parent Tier [tier00@connectsocial.com] with privacy of friends', 'friends', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'2', 2, 'Testing post from Parent Tier [tier00@connectsocial.com] with privacy of public', 'public', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'3', 2, 'Testing post from Parent Tier [tier00@connectsocial.com] with privacy of connections', 'connections', NULL, '2022-07-08 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'4', 2, 'UPDATES Testing post from Parent Tier [tier00@connectsocial.com] with privacy of tier-1', 'tier-1', NULL, '2022-07-09 05:12:10', '2022-07-01 13:12:58'],
        ['id'=>'5', 2, 'Testing post from Parent Tier [tier00@connectsocial.com] with privacy of tier-2', 'tier-2', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'6', 3, 'Testing post from Tier1 A [tier01_a@connectsocial.com] with privacy of friends', 'friends', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'7', 3, 'Testing post from Tier1 A [tier01_a@connectsocial.com] with privacy of public', 'public', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'8', 3, 'Testing post from Tier1 A [tier01_a@connectsocial.com] with privacy of connections', 'connections', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'9', 3, 'Testing post from Tier1 A [tier01_a@connectsocial.com] with privacy of tier-1', 'tier-1', NULL, '2022-07-06 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'10', 3, 'Testing post from Tier1 A [tier01_a@connectsocial.com] with privacy of tier-2', 'tier-2', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'11', 4, 'Testing post from Tier1 B [tier01_b@connectsocial.com] with privacy of friends', 'friends', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'12', 4, 'Testing post from Tier1 B [tier01_b@connectsocial.com] with privacy of public', 'public', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'13', 4, 'Testing post from Tier1 B [tier01_b@connectsocial.com] with privacy of connections', 'connections', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'14', 4, 'Testing post from Tier1 B [tier01_b@connectsocial.com] with privacy of tier-1', 'tier-1', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'15', 4, 'Testing post from Tier1 B [tier01_b@connectsocial.com] with privacy of tier-2', 'tier-2', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'16', 5, 'Testing post from Tier1 C [tier01_c@connectsocial.com] with privacy of friends', 'friends', NULL, '2022-07-09 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'17', 5, 'Testing post from Tier1 C [tier01_c@connectsocial.com] with privacy of public', 'public', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'18', 5, 'Testing post from Tier1 C [tier01_c@connectsocial.com] with privacy of connections', 'connections', NULL, '2022-07-06 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'19', 5, 'Testing post from Tier1 C [tier01_c@connectsocial.com] with privacy of tier-1', 'tier-1', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'20', 5, 'Testing post from Tier1 C [tier01_c@connectsocial.com] with privacy of tier-2', 'tier-2', NULL, '2022-07-08 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'21', 6, 'Testing post from Tier2 A [tier02_a@connectsocial.com] with privacy of friends', 'friends', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'22', 6, 'Testing post from Tier2 A [tier02_a@connectsocial.com] with privacy of public', 'public', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'23', 6, 'Testing post from Tier2 A [tier02_a@connectsocial.com] with privacy of connections', 'connections', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'24', 6, 'Testing post from Tier2 A [tier02_a@connectsocial.com] with privacy of tier-1', 'tier-1', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'25', 6, 'Testing post from Tier2 A [tier02_a@connectsocial.com] with privacy of tier-2', 'tier-2', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'26', 7, 'Testing post from Tier2 B [tier02_b@connectsocial.com] with privacy of friends', 'friends', NULL, '2022-07-06 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'27', 7, 'Testing post from Tier2 B [tier02_b@connectsocial.com] with privacy of public', 'public', NULL, '2022-07-06 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'28', 7, 'Testing post from Tier2 B [tier02_b@connectsocial.com] with privacy of connections', 'connections', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'29', 7, 'Testing post from Tier2 B [tier02_b@connectsocial.com] with privacy of tier-1', 'tier-1', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'30', 7, 'Testing post from Tier2 B [tier02_b@connectsocial.com] with privacy of tier-2', 'tier-2', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'31', 8, 'Testing post from Tier2 C [tier02_c@connectsocial.com] with privacy of friends', 'friends', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'32', 8, 'Testing post from Tier2 C [tier02_c@connectsocial.com] with privacy of public', 'public', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'33', 8, 'Testing post from Tier2 C [tier02_c@connectsocial.com] with privacy of connections', 'connections', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'34', 8, 'Testing post from Tier2 C [tier02_c@connectsocial.com] with privacy of tier-1', 'tier-1', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'35', 8, 'Testing post from Tier2 C [tier02_c@connectsocial.com] with privacy of tier-2', 'tier-2', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'36', 9, 'Testing post from Friend A [friend_a@connectsocial.com] with privacy of friends', 'friends', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'37', 9, 'Testing post from Friend A [friend_a@connectsocial.com] with privacy of public', 'public', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'38', 9, 'Testing post from Friend A [friend_a@connectsocial.com] with privacy of connections', 'connections', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'39', 9, 'Testing post from Friend A [friend_a@connectsocial.com] with privacy of tier-1', 'tier-1', NULL, '2022-07-09 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'40', 9, 'Testing post from Friend A [friend_a@connectsocial.com] with privacy of tier-2', 'tier-2', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'41', 10, 'Testing post from Friend B [friend_b@connectsocial.com] with privacy of friends', 'friends', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'42', 10, 'Testing post from Friend B [friend_b@connectsocial.com] with privacy of public', 'public', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'43', 10, 'Testing post from Friend B [friend_b@connectsocial.com] with privacy of connections', 'connections', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'44', 10, 'Testing post from Friend B [friend_b@connectsocial.com] with privacy of tier-1', 'tier-1', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'45', 10, 'Testing post from Friend B [friend_b@connectsocial.com] with privacy of tier-2', 'tier-2', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'46', 11, 'Testing post from Friend C [friend_c@connectsocial.com] with privacy of friends', 'friends', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'47', 11, 'Testing post from Friend C [friend_c@connectsocial.com] with privacy of public', 'public', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'48', 11, 'Testing post from Friend C [friend_c@connectsocial.com] with privacy of connections', 'connections', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'49', 11, 'Testing post from Friend C [friend_c@connectsocial.com] with privacy of tier-1', 'tier-1', NULL, '2022-07-06 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'50', 11, 'Testing post from Friend C [friend_c@connectsocial.com] with privacy of tier-2', 'tier-2', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'51', 12, 'Testing post from Connections A [connections_a@connectsocial.com] with privacy of friends', 'friends', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'52', 12, 'Testing post from Connections A [connections_a@connectsocial.com] with privacy of public', 'public', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'53', 12, 'Testing post from Connections A [connections_a@connectsocial.com] with privacy of connections', 'connections', NULL, '2022-07-09 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'54', 12, 'Testing post from Connections A [connections_a@connectsocial.com] with privacy of tier-1', 'tier-1', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'55', 12, 'Testing post from Connections A [connections_a@connectsocial.com] with privacy of tier-2', 'tier-2', NULL, '2022-07-08 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'1', 13, 'Testing post from Connections B [connections_b@connectsocial.com] with privacy of friends', 'friends', NULL, '2022-07-09 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'1', 13, 'Testing post from Connections B [connections_b@connectsocial.com] with privacy of public', 'public', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'1', 13, 'Testing post from Connections B [connections_b@connectsocial.com] with privacy of connections', 'connections', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'1', 13, 'Testing post from Connections B [connections_b@connectsocial.com] with privacy of tier-1', 'tier-1', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'1', 13, 'Testing post from Connections B [connections_b@connectsocial.com] with privacy of tier-2', 'tier-2', NULL, '2022-07-08 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'1', 14, 'Testing post from Connections C [connections_c@connectsocial.com] with privacy of friends', 'friends', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'1', 14, 'Testing post from Connections C [connections_c@connectsocial.com] with privacy of public', 'public', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'1', 14, 'Testing post from Connections C [connections_c@connectsocial.com] with privacy of connections', 'connections', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'1', 14, 'Testing post from Connections C [connections_c@connectsocial.com] with privacy of tier-1', 'tier-1', NULL, '2022-07-05 05:12:10', '2022-07-01 05:12:10'],
        ['id'=>'1', 14, 'Testing post from Connections C [connections_c@connectsocial.com] with privacy of tier-2', 'tier-2', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10']
       ];
       foreach($posts as $item){
        POST::create($item);
       }
    }
}
