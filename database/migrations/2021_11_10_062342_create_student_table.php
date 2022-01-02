<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->comment("Le nom de l'etudiant") -> nullable();
            $table->string('prenom')->comment("Le prenom de l'etudiant")->nullable();
            $table->date('dateNaiss')->comment("Pour recuperer la date de naisaance de l'etudiant")->nullable();
            $table->enum('state', ['CMR', 'GB', 'CID', 'DW'])->default('CMR');
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
        Schema::dropIfExists('student');
    }
}
