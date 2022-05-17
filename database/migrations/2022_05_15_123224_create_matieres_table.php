<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matieres', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('intitule')->unique();
            $table->integer('quota_horaire');
            $table->string('semestre');
            $table->float('prix');
            $table->string('enseignant_code');
            $table->string('specialite_code');
            $table->foreignId('niveau_id')->constrained()->onDelete('cascade');
            $table->foreign('enseignant_code')->references('code')->on('enseignants')->onDelete('cascade');
            $table->foreign('specialite_code')->references('code')->on('specialites')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matieres');
    }
};
