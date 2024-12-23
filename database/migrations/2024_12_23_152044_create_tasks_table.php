<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->date('start_date');
            $table->date('end_date');
            $table->time('scheduled_time')->nullable();
            $table->time('actual_time')->nullable();
            $table->unsignedBigInteger('minestone_id');
            $table->unsignedBigInteger('complete_reason_id');
            $table->unsignedBigInteger('priority_id');
            $table->unsignedBigInteger('status_id');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->timestamps();

            $table->foreign('minestone_id')->references('id')->on('minestones');
            $table->foreign('complete_reason_id')->references('id')->on('complete_reasons');
            $table->foreign('priority_id')->references('id')->on('priority');
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('created_by')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
