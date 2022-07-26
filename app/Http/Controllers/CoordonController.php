<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CoordonController extends Controller
{
    public function index(){
        $coordonnateurs = User::OrderBy('created_at','desc')->get()->where('role_as', 'coordonnateur');
        return view('sendTo.ajouter.listCoordonnateurs', compact('coordonnateurs'));
    }

    public function destroy($id){
        $coor=User::find($id);
        $coor->delete($id);

        return redirect('listCoordonnateurs');
    }

    
    public function search(Request $request){
        $search = $request ->get('search');
        $coor=User::where('role_as', 'coordonnateur')->where('name','like','%'.$search.'%')->paginate(5);
        return view('/sendTo.ajouter.listCoordonnateurs',['coordonnateurs'=>$coor]);
    }
}
