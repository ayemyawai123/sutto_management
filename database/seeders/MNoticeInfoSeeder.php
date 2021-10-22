<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MNoticeInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                "notice_id" => "1", "notice_title" => "J-SAT NAVIからのお知らせ", "notice_content" => "J-SAT NAVIからのお知らせです。"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "2", "notice_title" => "CM放送が放送されました！", "notice_content" => "一部エリアでCM放送が放送"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "3", "notice_title" => "NEW新型コロナウイルス感染防止対策について", "notice_content" => "平素よりメンズクリアをご"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "4", "notice_title" => "TVで紹介されました", "notice_content" => "下記テレビ番組で紹介されました。"
               , "remarks" => "テスト"
            ],
        ];

        DB::table('m_notice_info')->insert($data);
    }
}
