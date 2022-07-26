@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="title">
                    <h2>Ajouter un Enseignant</h2>
                    <h4>entrer les information suivantes pour ajouter un enseignant !</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('Enseignant.create') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('universite') ? ' has-error' : '' }}">
                            <label for="universite" class="col-md-4 control-label">universite</label>
                            <div class="col-md-6">
                            <select name="universite" id="universite" class="role">
                                <option value="" selected="selected">Selectionnez votre université</option>
                            </select>
                            
                                @if ($errors->has('universite'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('universite') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('etablissement') ? ' has-error' : '' }}">
                            <label for="etablissement" class="col-md-4 control-label">etablissement</label>
                            <div class="col-md-6">
                            <select name="etablissement" id="etablissement" class="role">
                                <option value="" selected="selected">Selectionnez votre etablissement</option>
                            </select>
                            
                                @if ($errors->has('etablissement'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('etablissement') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('filiere') ? ' has-error' : '' }}">
                            <label for="filiere" class="col-md-4 control-label">filière</label>
                            <div class="col-md-6">
                            <select name="filiere" id="filiere" class="role">
                                <option value="" selected="selected">Selectionnez votre filière</option>
                            </select>
                            
                                @if ($errors->has('filiere'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('filiere') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
