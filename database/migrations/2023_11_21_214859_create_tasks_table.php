<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->integer('points');
            $table->string('flag');
            $table->string('file')->nullable();
            $table->string('link')->nullable();
            $table->string('category')->nullable();
            $table->integer('solve_count')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
}
