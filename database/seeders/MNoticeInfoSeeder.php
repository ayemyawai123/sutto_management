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
            [
                "notice_id" => "5", "notice_title" => "お客様インタビューを更新しました", "notice_content" => "いつもsuttoをご"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "6", "notice_title" => "ご予約に関して", "notice_content" => "会員のお客様"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "7", "notice_title" => "アプリクーポン配信のお知らせ", "notice_content" => "いつもsuttoをご"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "8", "notice_title" => "トライアルご希望のお客様へ", "notice_content" => "日頃よりsuttoをご利用頂きまして"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "9", "notice_title" => "会員様の各種プランの期限延長について", "notice_content" => "Integration Specialist"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "10", "notice_title" => "新型コロナウイルス感染防止対策について", "notice_content" => "2020年7月24日（金）より"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "11", "notice_title" => "新型コロナウイルス感染防止対策についてad11", "notice_content" => "2020年7月24日（金）よりas11"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "12", "notice_title" => "新型コロナウイルス感染防止対策についてad12", "notice_content" => "2020年7月24日（金）よりas12"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "13", "notice_title" => "新型コロナウイルス感染防止対策についてad13", "notice_content" => "2020年7月24日（金）よりas13"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "14", "notice_title" => "新型コロナウイルス感染防止対策についてad14", "notice_content" => "2020年7月24日（金）よりas14"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "15", "notice_title" => "新型コロナウイルス感染防止対策についてad15", "notice_content" => "2020年7月24日（金）よりas15"
               , "remarks" => "テスト"
            ],
            [
                "notice_id" => "16", "notice_title" => "新型コロナウイルス感染防止対策についてad16", "notice_content" => "2020年7月24日（金）よりas16"
               , "remarks" => "テスト"
            ],

        ];

        DB::table('m_notice_info')->insert($data);
    }
}
