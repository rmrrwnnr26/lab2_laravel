<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Сначала добавляем колонку БЕЗ ограничения NOT NULL
            $table->string('email')->nullable()->after('name');
        });

        // Заполняем существующие записи (опционально)
        DB::table('users')->whereNull('email')->update(['email' => DB::raw("name || '@example.com'")]);

        // Теперь добавляем ограничение NOT NULL
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable(false)->change();
            
            // Добавляем уникальность, если нужно
            $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('email');
        });
    }
};
