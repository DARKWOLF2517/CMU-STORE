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
            $table->unsignedBigInteger('evaluation_form_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('evaluation_form_question_id');
            $table->unsignedBigInteger('answer');
            $table->foreign('evaluation_form_id')->references('id')->on('evaluation_form_details')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('evaluation_form_question_id')->references('id')->on('evaluation_form_questions')->onDelete('cascade');
            $table->foreign('answer')->references('id')->on('evaluation_form_options')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_form_answer');
    }
};
