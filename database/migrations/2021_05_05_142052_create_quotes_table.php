<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('dot_number');
            $table->unsignedInteger('premium_amount');
            $table->unsignedInteger('premium_tax');
            $table->unsignedInteger('premium_total');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->string('driver1_name');
            $table->string('driver1_age');
            $table->string('driver2_name')->nullable();
            $table->string('driver2_age')->nullable();
            $table->string('driver3_name')->nullable();
            $table->string('driver3_age')->nullable();
            $table->string('driver4_name')->nullable();
            $table->string('driver4_age')->nullable();
            $table->string('driver5_name')->nullable();
            $table->string('driver5_age')->nullable();
            $table->timestamps();

            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}
