<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accreditation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class AccredController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'etablissement' => 'required|string',
            'coordonnateur' => 'required|string',
            'diplome' => 'required|string',
            'langue' => 'required|string',
            'intitule_fr' => 'requiredstring',
            'intitule_ar' => 'requiredstring',
            'intitule_an' => 'requiredstring',
            'tronc_commun' => 'requiredstring',
            'champ_disciplinaire' => 'requiredstring',
            'domaine' => 'requiredstring',
            'discipline' => 'requiredstring',
            'mots_cles' => 'requiredstring',
            'mode_enseignement' => 'requiredstring',
            'series_bac' => 'requiredstring',
            'matieres_principales' => 'requiredstring',
            'prerequis_pedagogiques' => 'requiredstring',
            'criteres_selections1' => 'requiredstring',
            'conditions_acces' => 'requiredstring',
            'criteres_selections2' => 'requiredstring',
            'objectifs_formation' => 'requiredstring',
            'competences' => 'requiredstring',
            'debouches_formation' => 'requiredstring',
            'articulation_filiere' => 'requiredstring',
            'strategies_sectorielles' => 'requiredstring',
            'cooperation_internationale' => 'requiredstring',
            'cooperation_nationale' => 'requiredstring',
        ]);
    }

    /**
     *
     * @param  array  $data
     * @return \App\Accreditation
     */
    protected function create(Request $data)
    {
        Accreditation::create([
            'etablissement' => $data->etablissement,
            'coordonnateur' => $data->coordonnateur,
            'diplome' => $data->diplome,
            'langue' => $data->langue,
            'intitule_fr' => $data->intitule_fr,
            'intitule_ar' => $data->intitule_ar,
            'intitule_an' => $data->intitule_an,
            'tronc_commun' => $data->tronc_commun,
            'champ_disciplinaire' => $data->champ_disciplinaire,
            'domaine' => $data->domaine,
            'discipline' => $data->discipline,
            'mots_cles' => $data->mots_cles,
            'mode_enseignement' => $data->mode_enseignement,
            'series_bac' => $data->series_bac,
            'matieres_principales' => $data->matieres_principales,
            'prerequis_pedagogiques' => $data->prerequis_pedagogiques,
            'criteres_selections1' => $data->criteres_selections1,
            'conditions_acces' => $data->conditions_acces,
            'criteres_selections2' => $data->criteres_selections2,
            'objectifs_formation' => $data->objectifs_formation,
            'competences' => $data->competences,
            'debouches_formation' => $data->debouches_formation,
            'articulation_filiere' => $data->articulation_filiere,
            'strategies_sectorielles' => $data->strategies_sectorielles,
            'cooperation_internationale' => $data->cooperation_internationale,
            'cooperation_nationale' => $data->cooperation_nationale,
        ]);
        return back();
    }
    
    public function index(){
        $accreditations = Accreditation::where('etat',null)->get();
        return view('sendTo.ajouter.listAccreditations', compact('accreditations'));
    }
    public function show($id){
        $accred = Accreditation::find($id);
        return view('sendTo.ajouter.showAccreditation', compact('accred'))->with('accreditation',$accred);
    }
    public function destroy($id){
        $accred=Accreditation::find($id);
        $accred->delete($id);

        return redirect('listAccreditations');
    }
    public function accept(Request $request, $id){
        $accred = Accreditation::where('id',$id)->update([
            'etat'=>'accredité']);

        return redirect('listAccreditations');
    }
    
    public function search(Request $request){
        $search = $request ->get('search');
        $accred=Accreditation::where('etat',null)->where(function($q) use ($search){
            $q->where('id','like','%'.$search.'%')->orWhere('etablissement','like','%'.$search.'%')->orWhere('coordonnateur','like','%'.$search.'%')->orWhere('diplome','like','%'.$search.'%');})->paginate(5);
        return view('/sendTo.ajouter.listAccreditations',['accreditations'=>$accred]);
    }
}
