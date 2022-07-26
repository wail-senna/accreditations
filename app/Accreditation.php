<?php

namespace App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class Accreditation extends Model{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'etat','etablissement', 'coordonnateur', 'diplome', 'langue', 'intitule_fr', 'intitule_ar', 'intitule_an', 'tronc_commun',
         'champ_disciplinaire', 'domaine', 'discipline', 'mots_cles', 'mode_enseignement', 'series_bac', 'matieres_principales',
          'prerequis_pedagogiques', 'criteres_selections1', 'conditions_acces', 'criteres_selections2', 'objectifs_formation',
           'competences', 'debouches_formation', 'articulation_filiere', 'strategies_sectorielles', 'cooperation_internationale',
            'cooperation_nationale'
    ];

}