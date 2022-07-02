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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pilot_id')->constrained('pilots')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('ship_id')->constrained('ships')->onUpdate('cascade')->onDelete('cascade');
            $table->string('description');
            $table->bigInteger('payload')->unsigned();
            $table->string('origin_planet');
            $table->string('destination_planet');
            $table->bigInteger('value')->unsigned();
            $table->integer('status_complete')->default(0);
            $table->integer('accepted')->default(0);
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
        Schema::dropIfExists('contracts');
    }
};
