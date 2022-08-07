@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="title">
                    <h2>Ajouter Initiateur</h2>
                    <h4>entrer les information suivantes pour créer un initiateur !</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('Initiateur.create') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('etablissement') ? ' has-error' : '' }}">
                            <label for="etablissement" class="col-md-4 control-label">Etablissement</label>

                            <div class="col-md-8">
                            <select name="etablissement" class="role">
                                <option value="FC">Faculté Chariaa (FC)</option>
                                <option value="FLSH_Dhar_El_Mehraz">Faculté des Lettres et des Sciences Hum..(FLSH Dhar El Mehraz)</option>
                                <option value="FSJES">Faculté des Sciences Juridiques, Économiques et Sociales (FSJES)</option>
                                <option value="FS_Dhar_El_Mehraz">Faculté des Sciences (FS Dhar El Mehraz)</option>
                                <option value="FLSH_Saïs">Faculté des Lettres et des Sciences Humaines Saïs (FLSH Saïs)</option>
                                <option value="FST_Saïs">Faculté des Sciences et Techniques Saïs (FST Saïs)</option>
                                <option value="FMP">Faculté de Médecine et de Pharmacie (FMP)</option>
                                <option value="FPD_de_Taza">Faculté Poly Disciplinaire de Taza (FPD de Taza)</option>
                                <option value="ENS">École Normale Supérieur (ENS) </option>
                                <option value="EST">École Supérieure de Technologie (EST)</option>
                                <option value="ENSA">École Nationale des Sciences Appliquées (ENSA)</option>
                                <option value="ENCG">École Nationale de Gestion et de Commerce (ENCG) </option>
                            </select>
                                
                                @if ($errors->has('etablissement'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('etablissement') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('role_as') ? ' has-error' : '' }}">
                            <label for="role_as" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                            <!-- <select name="role_as" class="role">
                                <option value="initiateur">Initiateur</option>
                            </select> -->
                                <input id="role_as" name="role_as" type="text" value="initiateur" class="form-control" readonly>
                                @if ($errors->has('role_as'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role_as') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
