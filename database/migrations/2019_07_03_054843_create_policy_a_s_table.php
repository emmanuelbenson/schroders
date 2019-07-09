<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicyASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_a_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('policy_id');
            $table->string('holder')->nullable();
            $table->string('number')->nullable();
            $table->string('type')->nullable();
            $table->string('designation')->nullable();
            $table->date('commencement_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->decimal('amount_coverage', 10,2)->nullable();
            $table->string('coverage_type')->nullable();
            $table->string('premium')->nullable();
            $table->string('frequency')->nullable();
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
        Schema::dropIfExists('policy_a_s');
    }
}
