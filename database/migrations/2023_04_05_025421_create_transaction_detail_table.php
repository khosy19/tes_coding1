<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_detail', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_transaction')->unsigned()->index();
            $table->string('item');
            $table->integer('qty');

        });

        Schema::table('transaction_detail', function ($table) {
            $table->foreign('id_transaction')->references('id_transaction')->on('transaction')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('transaction_detail');
        Schema::enableForeignKeyConstraints();
    }
}
