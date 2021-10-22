<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKMUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k_m_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id', 36)->comment('ユーザID ※UUID');
            $table->string('user_name', 100)->comment('ユーザ名');
            $table->string('password', 128)->comment('パスワード');
            $table->string('mailaddress', 100)->comment('メールアドレス');
            $table->text('remarks')->comment('備考')->nullable();
            $table->dateTime('data_i_ymd')->comment('登録日');
            $table->string('data_i_user', 100)->comment('登録者');
            $table->dateTime('data_u_ymd')->comment('更新日');
            $table->string('data_u_user', 100)->comment('更新者');
            $table->rememberToken();
            $table->timestamps();
            // UKの設定
            $table->unique(['user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('k_m_user');
    }
}
