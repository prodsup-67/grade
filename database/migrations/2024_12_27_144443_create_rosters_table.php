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
        Schema::create('rosters', function (Blueprint $table) {
            $table->uuid("id");
            $table->timestamps();
            $table->string("student_id");
            $table->string("firstname");
            $table->string("lastname");
            $table->string("sec");
            $table->string("email");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rosters');
    }
};
