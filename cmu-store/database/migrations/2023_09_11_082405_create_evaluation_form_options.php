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
        Schema::create('evaluation_form_options', function (Blueprint $table) {
            $table->unsignedBigInteger('evaluation_form_id');
            $table->unsignedBigInteger('evaluation_form_question');
            $table->foreign('evaluation_form_id')->references('id')->on('evaluation_form_details')->onDelete('cascade');
            $table->foreign('evaluation_form_question')->references('id')->on('evaluation_form_questions')->onDelete('cascade');
            $table->text('option');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_form_options');
    }
};
