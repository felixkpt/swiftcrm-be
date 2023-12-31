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
        Schema::table('permissions', function (Blueprint $table) {
            $table->string('uri')->nullable();
            $table->string('title')->nullable();
            $table->string('icon')->nullable();
            $table->boolean('hidden')->default(false);
            $table->unsignedBigInteger('user_id')->default(0);
            $table->unsignedTinyInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->dropColumn('uri');
            $table->dropColumn('title');
            $table->dropColumn('icon');
            $table->boolean('hidden');
            $table->dropColumn('user_id');
        });
    }
};
