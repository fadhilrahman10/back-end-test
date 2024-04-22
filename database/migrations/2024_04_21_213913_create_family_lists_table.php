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
        Schema::create('family_lists', function (Blueprint $table) {
            $table->uuid('fl_id')->primary();
            $table->foreignUuid('cst_id');
            $table->string('fl_relation', 50);
            $table->string('fl_name', 50);
            $table->string('fl_dob', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_lists');
    }
};
