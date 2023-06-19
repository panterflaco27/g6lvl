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
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('radio-correo');
            $table->string('radio-paq');
            $table->string('check-face');
            $table->string('check-whp');
            $table->string('check-ins');
            $table->string('check-tk');
            $table->string('check-tlm');
            $table->string('radio-com');
            $table->string('radio-pw');
            $table->string('radio-yt');
            $table->string('radio-fp');
            $table->string('radio-pc');
            $table->string('radio-tb');
            $table->string('radio-md');
            $table->string('radio-hm');
            $table->string('radio-ic');
            $table->string('radio-ec');
            $table->string('radio-nc');
            $table->timestamps();
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
