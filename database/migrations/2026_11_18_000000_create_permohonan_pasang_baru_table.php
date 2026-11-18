<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('permohonan_pasang_baru', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_hp', 20);
            $table->text('alamat');
            $table->string('daya', 20);
            $table->string('jenis_bangunan', 30);
            $table->text('catatan')->nullable();
            $table->string('status', 20)->default('menunggu');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permohonan_pasang_baru');
    }
};
