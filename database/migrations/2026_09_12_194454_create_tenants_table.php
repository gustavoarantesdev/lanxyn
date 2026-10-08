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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('trade_name', 100);
            $table->char('person_type', 2); // PF ou PJ
            $table->string('document_number', 18)->unique();
            $table->string('mobile_phone', 13);
            $table->string('landline_phone', 12)->nullable();
            $table->string('email', 150);
            $table->text('notes')->nullable();
            $table->date('joined_at');
            $table->date('ended_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
