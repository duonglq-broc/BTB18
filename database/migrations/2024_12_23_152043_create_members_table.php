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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->unsignedBigInteger('position_id');
            $table->string('mail', 50)->unique();
            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('group_id');
            $table->timestamps();

            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('group_id')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
