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
        if (!Schema::hasColumn('kompetensis', 'nama_kompetensi')) {
            Schema::table('kompetensis', function (Blueprint $table) {
                $table->string('nama_kompetensi')->after('id');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('kompetensis', 'nama_kompetensi')) {
            Schema::table('kompetensis', function (Blueprint $table) {
                $table->dropColumn('nama_kompetensi');
            });
        }
    }
};