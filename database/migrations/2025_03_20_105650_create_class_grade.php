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
        Schema::create('class_grades', function (Blueprint $table) {
            $table->uuid("id");
            $table->timestamps();
            $table->float("student_id"); 
            $table->float("Class (AC) (3%)");
            $table->float("Class (SR) (3%)");
            $table->float("Class (NR) (3%)");
            $table->float("Class (1) (1%)");
            $table->float("Quiz (AC) (10%)");
            $table->float("Quiz (SR) (10%)");
            $table->float("Report 1 (AC) (5%)");
            $table->float("Report 2 (AC) (10%)");
            $table->float("Project (NR) (20%)");
            $table->float("Final (AC) (5%)");
            $table->float("Final (SR1) (10%)");
            $table->float("Final (SR2) (10%)");
            $table->float("Final (NR1) (5%)");
            $table->float("Final (NR2) (5%)");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_grade');
    }
};
