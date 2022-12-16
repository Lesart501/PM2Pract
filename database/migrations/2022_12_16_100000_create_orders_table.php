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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('statuses_id')->constrained('statuses','id')->cascadeOnDelete()->default(1);
            $table->foreignId('users_id')->constrained('users','id')->cascadeOnDelete();
            $table->foreignId('trucks_id')->constrained('trucks','id')->cascadeOnDelete();
            $table->foreignId('towns_id')->constrained('towns','id')->cascadeOnDelete();
            $table->date('date');
            $table->time('time');
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
        Schema::dropIfExists('orders');
    }
};
