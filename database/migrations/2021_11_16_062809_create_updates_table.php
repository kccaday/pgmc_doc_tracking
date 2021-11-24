<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pgmc_details_tbl', function (Blueprint $table) {
            $table->id();
            $table->text('afpsn');
            $table->text('transaction_type');
            $table->text('first_name');
            $table->text('last_name');
            $table->text('address');
            $table->text('contact_no');
            $table->text('other_contact_no')->nullable();
            $table->text('email')->nullable();
            $table->text('bene')->nullable();
            $table->text('folder_no')->nullable();
            $table->text('compliance')->nullable();
            $table->text('date');
            $table->text('remarks');
            $table->text('unit_to_receive');
            $table->text('created_by');
            $table->text('last_updated_by');
            $table->text('unit');
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
        Schema::dropIfExists('updates');
    }
}
