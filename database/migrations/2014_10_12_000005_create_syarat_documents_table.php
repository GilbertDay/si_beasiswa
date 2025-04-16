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
        Schema::create('syarat_documents', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dokumen');
            $table->foreignId('beasiswa_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_document_id')->nullable()->constrained('user_documents')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syarat_documents');
    }
};
