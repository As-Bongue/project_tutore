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
        Schema::create('emargements', function (Blueprint $table) {
            $table->id();
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->date('jour');
            $table->string('matiere_code');
            $table->foreign('matiere_code')->references('code')->on('matieres')->onDelete('cascade');
            $table->string('reglement_code');
            $table->foreign('reglement_code')->references('code')->on('reglements');
            $table->foreignId('anne_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('emargements');
    }
};
