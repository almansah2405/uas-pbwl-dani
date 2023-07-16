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
        Schema::create('tb_sepatu', function (Blueprint $table) {
            $table->increments('sepatu_id');
            $table->string('sepatu_id_jenissepatu');
            $table->string('sepatu_nama');
            $table->string('sepatu_harga');
            $table->string('sepatu_stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_sepatu');
    }
};
