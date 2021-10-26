<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLogInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_log_info', function (Blueprint $table) {

                $table->increments('id');
                $table->datetime('operating_ymd')->comment('ログ出力日時')->nullable();
                $table->string('program_method',100)->comment('処理アクションメソッド名')->nullable();
                $table->string('program_id',100)->comment('処理コントローラー名')->nullable();
                $table->string('user_id',36)->comment('ユーザID')->nullable();
                $table->string('j_id', 50)->comment('JSAT NAVI ID')->nullable();
                $table->string('operating_kbn_nm',50)->comment('操作区分名')->nullable();
                $table->string('operating_detail', 1000)->comment('操作内容')->nullable();
                $table->string('err_kbn',10)->comment('エラー区分')->nullable();
                $table->text('err_detail')->comment('エラー内容')->nullable();
                $table->text('stack_trace')->comment('スタックトレース')->nullable();
                $table->string('err_position', 1000)->comment('エラー発生場所')->nullable();
                $table->dateTime('data_i_ymd')->comment('登録日');
                $table->string('data_i_user', 100)->comment('登録者');
                $table->dateTime('data_u_ymd')->comment('更新日');
                $table->string('data_u_user',100)->comment('更新者');
                $table->rememberToken();
                $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_log_info');
    }
}
