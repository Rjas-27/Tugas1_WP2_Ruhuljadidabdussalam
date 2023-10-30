<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void
    {
        Schema::create('lecturers', function (Blueprint $table) {
            // field id() di sini otomatis int auto increment
            $table->id();
            $table->char('nip', 8);
            $table->string('nama', 30);
            $table->string('keilmuan', 30);
            // untuk field created_at dan updated_at
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};
