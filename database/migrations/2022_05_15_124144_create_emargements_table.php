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
            $table->foreignId('moi_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('matiere_code')->references('code')->on('matieres')->onDelete('cascade')->onUpdate('cascade');
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
