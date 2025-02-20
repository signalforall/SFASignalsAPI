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
        Schema::create('signals', function (Blueprint $table) {
            $table->id();
            $table->string('currency_pair');
            $table->enum('signal_type', ['long', 'short']);
            $table->decimal('entry_point', 10, 5);
            $table->integer('leverage');
            $table->text('take_profits'); // JSON array of take profit levels
            $table->decimal('stop_loss', 10, 5);
            $table->string('time_frame');
            $table->boolean('is_vip')->default(false); // Free or VIP signal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signals');
    }
};