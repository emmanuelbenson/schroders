<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicyBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_b_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('policy_id');
            $table->string('nominee_ref')->nullable();
            $table->string('nominee')->nullable();
            $table->string('relationship')->nullable();
            $table->text('contact_address')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('policy_b_s');
    }
}
