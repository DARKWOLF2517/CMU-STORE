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
        Schema::create('evaluation_form_answer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('org_id');
            $table->unsignedBigInteger('evaluation_form_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('org_id')->references('org_id')->on('organizations')->onDelete('cascade');
            $table->foreign('evaluation_form_id')->references('id')->on('evaluation_form_details')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('answer');
        });
    }

    /**
     * Reverse the migrations
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_form_answer');
    }
};