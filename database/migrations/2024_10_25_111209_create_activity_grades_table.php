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
        Schema::create('activity_grades', function (Blueprint $table) {
            $table->id();
            $table->decimal("percentage");
            $table->decimal("grade_acquired");
            $table->string("activity_type");
            $table->unsignedInteger("grade_id");
            $table->unsignedInteger("activity_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_grades');
    }
};



