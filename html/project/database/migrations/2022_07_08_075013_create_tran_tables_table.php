<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tran_tables', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->bigInteger('member_id')->unsigned();
            $table->string('product_name');
            $table->string('buy_date');
            $table->integer('quantity')->unsigned();
            $table->foreign('member_id')->references('id')->on('office_masters')->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tran_tables');
    }
}
