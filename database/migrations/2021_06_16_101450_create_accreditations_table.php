<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccreditationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accreditations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('etat')->nullable();
            $table->string('etablissement')->nullable();
            $table->string('coordonnateur')->nullable();
            $table->string('diplome')->nullable();
            $table->string('langue')->nullable();
            $table->string('intitule_fr')->nullable();
            $table->string('intitule_ar')->nullable();
            $table->string('intitule_an')->nullable();
            $table->string('tronc_commun')->nullable();
            $table->string('champ_disciplinaire')->nullable();
            $table->string('domaine')->nullable();
            $table->string('discipline')->nullable();
            $table->string('mots_cles')->nullable();
            $table->string('mode_enseignement')->nullable();
            $table->string('series_bac')->nullable();
            $table->string('matieres_principales')->nullable();
            $table->string('prerequis_pedagogiques')->nullable();
            $table->string('criteres_selections1')->nullable();
            $table->string('conditions_acces')->nullable();
            $table->string('criteres_selections2')->nullable();
            $table->string('objectifs_formation')->nullable();
            $table->string('competences')->nullable();
            $table->string('debouches_formation')->nullable();
            $table->string('articulation_filiere')->nullable();
            $table->string('strategies_sectorielles')->nullable();
            $table->string('cooperation_internationale')->nullable();
            $table->string('cooperation_nationale')->nullable();
            
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
        Schema::dropIfExists('accreditations');
    }
}
