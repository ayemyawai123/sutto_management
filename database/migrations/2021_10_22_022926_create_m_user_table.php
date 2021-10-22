<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_user', function (Blueprint $table) {
            $table->id();
            $table->integer('membership_no')->comment('会員番号(stores予約)');
            $table->integer('customer_no')->comment('顧客番号');
            $table->string('reservation_customer_nm', 10)->comment('予約者の氏名');
            $table->string('customer_nm', 50)->comment('顧客名');
            $table->string('mail_address')->comment('メールアドレス');
            $table->string('telephone_no', 50)->comment('電話番号');
            $table->date('birthday', 50)->comment('誕生日');
            $table->string('sex', 50)->comment('性別');
            $table->string('postal_code', 50)->comment('郵便番号');
            $table->string('customer_memo', 50)->comment('顧客メモ');
            $table->string('registeration_date', 50)->comment('登録日');
            $table->string('registered_person', 50)->comment('登録者');
            $table->dateTime('data_i_ymd')->comment('登録日');
            $table->string('data_i_user', 100)->comment('登録者');
            $table->dateTime('data_u_ymd')->comment('更新日');
            $table->string('data_u_user', 100)->comment('更新者');
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
        Schema::dropIfExists('m_user');
    }
}
