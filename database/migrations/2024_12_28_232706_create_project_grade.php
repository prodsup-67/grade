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
        Schema::create('project_grades', function (Blueprint $table) {
            $table->uuid("id");
            $table->timestamps();
            $table->string("group_name");
            $table->string("group_key");
            $table->string("project_title");
            $table->float("proposal(4)");
            $table->float("monitoring(5)");
            $table->float("noti(5)");
            $table->float("control(5)");
            $table->float("storage(5)");
            $table->float("logic(5)");
            $table->float("slide(3)");
            $table->float("present(3)");
            $table->float("total");
            $table->float("abet");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_grade');
    }
};
