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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants')->restrictOnDelete();
            $table->string('name', 150);
            $table->string('document_number', 14); // CPF
            $table->date('birth_date')->nullable();
            $table->string('mobile_phone', 13);
            $table->string('landline_phone', 12)->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('role', 20)->default('operator');
            $table->string('job_title', 50)->nullable();
            $table->date('joined_at')->nullable();
            $table->date('terminated_at')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users')->restrictOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->restrictOnDelete();
            $table->timestamps();
            $table->unique(['tenant_id', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
