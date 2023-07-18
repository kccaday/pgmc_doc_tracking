<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatingUsersTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pgmc_updating_users_tbl', function (Blueprint $table) {
            $table->id();
            $table->text('pensioner_type');
            $table->text('pensioner_loc');
            $table->text('pensioner_afpsn');
            $table->text('pensioner_first_name');
            $table->text('pensioner_last_name');
            $table->text('pensioner_middle_initial');
            $table->text('pensioner_age');
            $table->text('pensioner_dob');
            $table->text('pensioner_home_address');
            $table->text('pensioner_contact_no');
            $table->text('pensioner_crs')->nullable();
            $table->text('pensioner_helpline_code');
            $table->text('pensioner_pgmc_ref_code');
            $table->text('creation_date');
            $table->string('pensioner_proof')->nullable();
            $table->string('pensioner_afpid')->nullable();
            $table->string('pensioner_afpidnr')->nullable();
            $table->string('pensioner_retor')->nullable();
            $table->string('pensioner_order')->nullable();
            $table->text('isUpdated');
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
        //
    }
}
