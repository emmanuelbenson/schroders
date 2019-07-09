<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicyHolderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_holder_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('policy_id');
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('occupation')->nullable();
            $table->string('health_status')->nullable();
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
        Schema::dropIfExists('policy_holder_details');
    }
}
