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
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'title')) {
                $table->string('title')->nullable();
            }

            if (!Schema::hasColumn('users', 'bio')) {
                $table->text('bio')->nullable();
            }

            if (!Schema::hasColumn('users', 'username')) {
                $table->string('username')->unique()->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'title')) {
                $table->dropColumn('title');
            }

            if (Schema::hasColumn('users', 'bio')) {
                $table->dropColumn('bio');
            }

            if (Schema::hasColumn('users', 'username')) {
                $table->dropColumn('username');
            }
        });
    }
};
