<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['membership_no'=>'1','customer_no'=>1,'reservation_customer_nm'=>'aaaa',
             'customer_nm'=>'vvv',
            'mailaddress'=>'demo@jsat.com','password'=>bcrypt('1111'),
            'telephone_no'=>'09448001413', 'birthday'=>'2021-10-04','sex'=>"Female",
            'postal_code' => '13213', 'customer_memo'=>'asdasd','registeration_date'=>' ',
            'registered_person' => 'sdfsf']

        ];
        DB::table('m_user')->insert($data);
    }

}
