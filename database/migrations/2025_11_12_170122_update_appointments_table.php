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
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn('date');
        });

        Schema::table('appointments', function (Blueprint $table) {
            $table->datetime('appointment_datetime');
            $table->unsignedInteger('price');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->date('date');
        });

        Schema::table('appointments', function(Blueprint $table) {
            $table->dropColumn('appointment_datetime');
            $table->dropColumn('price');
        });
    }
};
