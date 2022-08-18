<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enseignant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class EnsController extends Controller
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:enseignants',
            'universite' => 'required|string',
            'etablissement' => 'required|string',
            'filiere' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Enseignant
     */
    protected function create(Request $data)
    {
        Enseignant::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'universite' => $data['universite'],
            'etablissement' => $data['etablissement'],
            'filiere' => $data['filiere'],
        ]);
        return redirect('listEnseignants');
    }


    public function index(){
        $enseignants = Enseignant::OrderBy('created_at','desc')->get();
        return view('sendTo.ajouter.listEnseignants', compact('enseignants'));
    }
    
    public function destroy($id){
        $ens=Enseignant::find($id);
        $ens->delete($id);

        return redirect('listEnseignants');
    }
    
    public function search(Request $request){
        $search = $request ->get('search');
        $ens=Enseignant::where('name','like','%'.$search.'%')->orWhere('email','like','%'.$search.'%')->orWhere('universite','like','%'.$search.'%')->orWhere('etablissement','like','%'.$search.'%')->orWhere('filiere','like','%'.$search.'%')->paginate(5);
        return view('/sendTo.ajouter.listEnseignants',['enseignants'=>$ens]);
    }
}
