<?php

namespace App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\Enseignant as Model;

class Enseignant extends Model{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'universite', 'etablissement', 'filiere',
    ];

}