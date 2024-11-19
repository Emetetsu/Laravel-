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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string('name'); // name column
            $table->string('email'); // email column
            $table->string('phone'); // phone column
            $table->text('about'); // about column
            $table->text('education'); // education column
            $table->text('experience'); // experience column
            $table->text('skills'); // skills column
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
