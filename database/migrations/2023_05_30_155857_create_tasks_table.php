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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('task_id');
            $table->integer('task_main');
            $table->integer('task_sub');
            $table->integer('task_topic');
            $table->string('task_name');
            $table->float('task_weight');
            $table->timestamps();
        });

        Schema::create('task_weights', function (Blueprint $table) {
            $table->id();
            $table->integer('task_id_main');
            $table->integer('task_id_share');
            $table->float('task_weight');
            
            // $table->foreign('task_id_main')->references('id')->on('tasks');
            // $table->foreign('task_id_share')->references('id')->on('tasks');
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('task_weights');
    }
};
