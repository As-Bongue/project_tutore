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
        Schema::create('matiere__specialite', function (Blueprint $table) {
            $table->string('matiere_code');
            $table->string('specialite_code');
            $table->foreign('matiere_code')->references('code')->on('matieres')->onDelete('cascade');
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
        Schema::dropIfExists('matiere__specialite');
    }
};
