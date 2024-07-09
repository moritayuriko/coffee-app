<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('cart_items', function (Blueprint $table) {
           $table->id();
           $table->unsignedBigInteger('user_id'); // ユーザーID
           $table->unsignedBigInteger('menu_id'); // メニューID（購入する商品のID）
           $table->integer('quantity')->default(1); // 数量
           $table->timestamps();

           // 外部キー制約
           $table->foreign('user_id')->references('id')->on('users');
           $table->foreign('menu_id')->references('id')->on('menus');
       });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::dropIfExists('cart_items');
   }
};
