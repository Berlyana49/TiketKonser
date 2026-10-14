<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id(); //primary key
            $table->string('title');
            $table->enum('category', ['Musik', 'Festival', 'Seminar']);
            $table->integer('ticket_price');
            $table->text('description');
            $table->string('image')->nullable();
            $table->timestamps(); //created at & updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
