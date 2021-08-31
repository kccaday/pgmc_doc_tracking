<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pgmc_text_main_tbl', function (Blueprint $table) {
            $table->id();
            $table->integer('afpsn');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('pension_rank');
            $table->string('trxns')->nullable();
            $table->string('type_of_process')->nullable();
            $table->string('remarks')->nullable();
            $table->string('contact_no')->nullable();
            $table->timestamps();
            $table->integer('status');
            $table->string('concatenated')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('text_main');
    }
}
