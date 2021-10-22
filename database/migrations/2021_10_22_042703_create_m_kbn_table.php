<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMKbnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kbn', function (Blueprint $table) {
            $table->id();
            $table->string('itm_id', 10)->comment('項目値');
            $table->string('itm_nm', 50)->comment('項目名称');
            $table->string('kbn_id',10)->comment('区分値');
            $table->string('kbn_nm', 50)->comment('区分名称');
            $table->integer('index')->comment('並び順')->nullable();
            $table->text('remarks', 50)->comment('備考')->nullable();
            $table->dateTime('data_i_ymd')->comment('登録日');
            $table->string('data_i_user', 100)->comment('登録者');
            $table->dateTime('data_u_ymd')->comment('更新日');
            $table->string('data_u_user',100)->comment('更新者');
            $table->timestamps();

            $table->unique(['itm_id', 'kbn_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_kbn');
    }
}
