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
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('commercial_registration_no');
            $table->string('activity_type');
            $table->text('full_address');
            $table->string('responsible_person');
            $table->string('job_title');
            $table->string('nationality');
            $table->string('email');
            $table->string('phone_number');
            $table->integer('requested_area');
            $table->enum('setup_preference', ['raw_space', 'not_equipped', 'fully_equipped']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participations');
    }
};
