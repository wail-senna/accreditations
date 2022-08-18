<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class IniController extends Controller
{
    public function index(){
        $initiateurs = User::OrderBy('created_at','desc')->where('role_as', 'initiateur')->get();
        return view('sendTo.ajouter.listInitiateurs', compact('initiateurs'));
    }

    public function destroy($id){
        $ini=User::find($id);
        $ini->delete($id);

        return redirect('listInitiateurs');
    }

    
    public function search(Request $request){
        $search = $request ->get('search');
        $ini=User::where('role_as', 'initiateur')->where(function($q) use ($search){
            $q->where('name','like','%'.$search.'%')->orWhere('email','like','%'.$search.'%')->orWhere('etablissement','like','%'.$search.'%')->orWhere('created_at','like','%'.$search.'%');})->paginate(5);
        return view('/sendTo.ajouter.listInitiateurs',['initiateurs'=>$ini]);
    }
}
