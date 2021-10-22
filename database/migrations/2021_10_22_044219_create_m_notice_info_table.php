<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMNoticeInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_notice_info', function (Blueprint $table) {
            $table->id();
            $table->string('notice_id', 36)->comment('お知らせID ※UUID');
            $table->text('notice_title')->comment('お知らせタイトル');
            $table->text('notice_content')->comment('お知らせ内容');
            $table->text('remarks')->comment('備考')->nullable();

            $table->dateTime('data_i_ymd')->comment('登録日')->nullable();
            $table->string('data_i_user', 100)->comment('登録者')->nullable();
            $table->dateTime('data_u_ymd')->comment('更新日')->nullable();
            $table->string('data_u_user', 100)->comment('更新者')->nullable();
            $table->timestamps();
            $table->unique(['notice_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_notice_info');
    }
}
