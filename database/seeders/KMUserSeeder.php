<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KMUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['user_id'=>'fa28a9be-14de-4094-a211-99c9aee0407e', 'user_name'=>'J-SAT テスト','mailaddress'=>'demo@jsat.com','password'=>bcrypt('1111')]

        ];
        DB::table('k_m_user')->insert($data);
    }

}
