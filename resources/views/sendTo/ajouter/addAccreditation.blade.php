@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="title">
                    <h2>faire une demande d'accréditation</h2>
                    <h4>entrer les information suivantes pour faire une demande d'accréditation !</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('Accreditation.create') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('etablissement') ? ' has-error' : '' }}">
                            <label for="etablissement" class="col-md-4 control-label">Etablissement</label>

                            <div class="col-md-6">
                            <select name="etablissement" class="role col-md-12">
                                <option value="FC">Faculté Chariaa (FC)</option>
                                <option value="FLSH_Dhar_El_Mehraz">Faculté des Lettres et des Sciences Humaines (FLSH Dhar El Mehraz)</option>
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

                        <div class="form-group{{ $errors->has('coordonnateur') ? ' has-error' : '' }}">
                            <label for="coordonnateur" class="col-md-4 control-label">Coordonnateur de la filière</label>

                            <div class="col-md-6">
                                @if(Auth::user()->role_as =='coordonnateur')
                                    <input id="coordonnateur" type="text" class="form-control" name="coordonnateur" value="{{ Auth::user()->name }}" readonly required autofocus>
                                @else
                                    <input id="coordonnateur" type="text" class="form-control" name="coordonnateur" value="{{ old('coordonnateur') }}" required autofocus>
                                @endif
                                @if ($errors->has('coordonnateur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coordonnateur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('diplome') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">diplome</label>

                            <div class="col-md-6">
                                <input id="diplome" type="text" class="form-control" name="diplome" value="{{ old('diplome') }}" required>

                                @if ($errors->has('diplome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('diplome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('langue') ? ' has-error' : '' }}">
                            <label for="langue" class="col-md-4 control-label">Langue principale</label>

                            <div class="col-md-6">
                            <select name="langue" class="role">
                                <option value="francais">Français</option>
                                <option value="arabe">Arabe</option>
                                <option value="anglais">Anglais</option>
                            </select>
                                
                                @if ($errors->has('langue'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('langue') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('intitule_fr') ? ' has-error' : '' }}">
                            <label for="intitule_fr" class="col-md-4 control-label">Intitulé de la filière en francais *</label>

                            <div class="col-md-6">
                                <input id="intitule_fr" type="text" class="form-control" name="intitule_fr" value="{{ old('intitule_fr') }}" required>

                                @if ($errors->has('intitule_fr'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('intitule_fr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('intitule_ar') ? ' has-error' : '' }}">
                            <label for="intitule_ar" class="col-md-4 control-label">Intitulé de la filière en arabe *</label>

                            <div class="col-md-6">
                                <input id="intitule_ar" type="text" class="form-control" name="intitule_ar" value="{{ old('intitule_ar') }}" required>

                                @if ($errors->has('intitule_ar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('intitule_ar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('intitule_an') ? ' has-error' : '' }}">
                            <label for="intitule_an" class="col-md-4 control-label">Intitulé de la filière en anglais *</label>

                            <div class="col-md-6">
                                <input id="intitule_an" type="text" class="form-control" name="intitule_an" value="{{ old('intitule_an') }}" required>

                                @if ($errors->has('intitule_an'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('intitule_an') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tronc_commun') ? ' has-error' : '' }}">
                            <label for="tronc_commun" class="col-md-4 control-label">La filière prévoit-elle un tronc commun harmonisé ? *</label>

                            <div class="col-md-6">
                                <input type="radio" name="tronc_commun" value="oui" id="oui" /> <label for="tronccommun0">oui</label>
                                <input type="radio" name="tronc_commun" value="non" id="non" /> <label for="tronccommun1">non</label>

                                @if ($errors->has('tronc_commun'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tronc_commun') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('champ_disciplinaire') ? ' has-error' : '' }}">
                            <label for="champ_disciplinaire" class="col-md-4 control-label">Champ Disciplinaire *</label>

                            <div class="col-md-6">
                            <select name="champ_disciplinaire" class="selectpicker" multiple>
                                <option value="champ_1">champ_1</option>
                                <option value="champ_2">champ_2</option>
                                <option value="champ_3">champ_3</option>
                                <option value="champ_4">champ_4</option>
                            </select>
                            
                                @if ($errors->has('champ_disciplinaire'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('champ_disciplinaire') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('domaine') ? ' has-error' : '' }}">
                            <label for="domaine" class="col-md-4 control-label">Domaine *</label>

                            <div class="col-md-6">
                            <select name="domaine" class="role">
                                <option value="Agro-alimentaire">Agro-alimentaire</option>
                                <option value="Agronomie">Agronomie</option>
                                <option value="Anthropologie">Anthropologie</option>
                                <option value="Archéologie">Archéologie</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Arts">Arts</option>
                                <option value="Astronomie">Astronomie</option>
                                <option value="Biologie">Biologie</option>
                                <option value="Chimie">Chimie</option>
                                <option value="Anthropologie">Anthropologie</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Communications">Communications</option>
                                <option value="Démographie">Démographie</option>
                                <option value="Droit">Droit</option>
                                <option value="Écologie">Écologie</option>
                                <option value="Économie">Économie</option>
                                <option value="Géographie">Géographie</option>
                                <option value="Géologie">Géologie</option>
                                <option value="Gestion">Gestion</option>
                                <option value="Histoire">Histoire</option>
                                <option value="Informatique">Informatique</option>
                                <option value="Langues">Langues</option>
                                <option value="Littératures">Littératures</option>
                                <option value="Mathématiques">Mathématiques</option>
                                <option value="Médecine">Médecine</option>
                                <option value="Médecine vétérinaire">Médecine vétérinaire</option>
                                <option value="Philosophie">Philosophie</option>
                                <option value="Physique">Physique</option>
                                <option value="Psychologie">Psychologie</option>
                                <option value="Sociologie">Sociologie</option>
                                <option value="Statistiques">Statistiques</option>
                                <option value="Tourisme">Tourisme</option>
                            </select>
                                
                                @if ($errors->has('domaine'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('domaine') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('discipline') ? ' has-error' : '' }}">
                            <label for="discipline" class="col-md-4 control-label">Discipline *</label>

                            <div class="col-md-6">
                            <select name="discipline" class="role">
                                <option value="Agro-alimentaire">Agro-alimentaire</option>
                                <option value="Agronomie">Agronomie</option>
                                <option value="Anthropologie">Anthropologie</option>
                                <option value="Archéologie">Archéologie</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Arts">Arts</option>
                                <option value="Astronomie">Astronomie</option>
                                <option value="Biologie">Biologie</option>
                                <option value="Chimie">Chimie</option>
                                <option value="Anthropologie">Anthropologie</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Communications">Communications</option>
                                <option value="Démographie">Démographie</option>
                                <option value="Droit">Droit</option>
                                <option value="Écologie">Écologie</option>
                                <option value="Économie">Économie</option>
                                <option value="Géographie">Géographie</option>
                                <option value="Géologie">Géologie</option>
                                <option value="Gestion">Gestion</option>
                                <option value="Histoire">Histoire</option>
                                <option value="Informatique">Informatique</option>
                                <option value="Langues">Langues</option>
                                <option value="Littératures">Littératures</option>
                                <option value="Mathématiques">Mathématiques</option>
                                <option value="Médecine">Médecine</option>
                                <option value="Médecine vétérinaire">Médecine vétérinaire</option>
                                <option value="Philosophie">Philosophie</option>
                                <option value="Physique">Physique</option>
                                <option value="Psychologie">Psychologie</option>
                                <option value="Sociologie">Sociologie</option>
                                <option value="Statistiques">Statistiques</option>
                                <option value="Tourisme">Tourisme</option>
                            </select>
                                
                                @if ($errors->has('discipline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('discipline') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mots_cles') ? ' has-error' : '' }}">
                            <label for="mots_cles" class="col-md-4 control-label">mots clés *</label>

                            <div class="col-md-6">
                            <select name="mots_cles" class="selectpicker" multiple>
                                <option value="Didactique">Didactique</option>
                                <option value="Pédagogie">Pédagogie</option>
                                <option value="linguistique">linguistique</option>
                                <option value="littérature">littérature</option>
                            </select>
                            
                                @if ($errors->has('mots_cles'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mots_cles') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mode_enseignement') ? ' has-error' : '' }}">
                            <label for="mode_enseignement" class="col-md-4 control-label">MODE D'ENSEIGNEMENT *</label>

                            <div class="col-md-6">
                                <input type="radio" name="mode_enseignement" value="Présentiel" id="Présentiel" /> <label for="Présentiel">Présentiel</label>
                                <input type="radio" name="mode_enseignement" value="Hybride" id="Hybride" /> <label for="Hybride">Hybride</label>
                                <input type="radio" name="mode_enseignement" value="Alternance" id="Alternance" /> <label for="Alternance">Alternance</label>
                                <input type="radio" name="mode_enseignement" value="A distance" id="A distance" /> <label for="A distance">A distance</label>

                                @if ($errors->has('mode_enseignement'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mode_enseignement') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('series_bac') ? ' has-error' : '' }}">
                            <label for="series_bac" class="col-md-4 control-label">SÉRIES DE BAC REQUISES *</label>

                            <div class="col-md-6">
                            <select name="series_bac" class="selectpicker" multiple>
                                <option value="Baccalauréat science Mathématiques A">Baccalauréat science Mathématiques A</option>
                                <option value="Baccalauréat science Mathématiques B">Baccalauréat science Mathématiques B</option>
                                <option value="Baccalauréat Sciences Physiques">Baccalauréat Sciences Physiques</option>
                                <option value="Baccalauréat Sciences de la Vie et de la terre">Baccalauréat Sciences de la Vie et de la terre</option>
                                <option value="Baccalauréat Sciences Humaines">Baccalauréat Sciences Humaines</option>
                                <option value="Baccalauréat Economie">Baccalauréat Economie</option>
                            </select>
                            
                                @if ($errors->has('series_bac'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('series_bac') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('matieres_principales') ? ' has-error' : '' }}">
                            <label for="matieres_principales" class="col-md-4 control-label">MATIÈRES PRINCIPALES REQUISES *</label>

                            <div class="col-md-6">
                            <select name="matieres_principales" class="selectpicker" multiple>
                                <option value="Francais">Francais</option>
                                <option value="Mathématiques">Mathématiques</option>
                                <option value="Physique">Physique</option>
                                <option value="SVT">SVT</option>
                            </select>
                            
                                @if ($errors->has('matieres_principales'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('matieres_principales') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('prerequis_pedagogiques') ? ' has-error' : '' }}">
                            <label for="prerequis_pedagogiques" class="col-md-4 control-label">Prérequis pédagogiques de la filière (dans le cas échéant, saisir: Néant) *</label>

                            <div class="col-md-6">
                                <input id="prerequis_pedagogiques" type="text" class="form-control" name="prerequis_pedagogiques" value="{{ old('prerequis_pedagogiques') }}" required autofocus>

                                @if ($errors->has('prerequis_pedagogiques'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prerequis_pedagogiques') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criteres_selections1') ? ' has-error' : '' }}">
                            <label for="criteres_selections1" class="col-md-4 control-label">Préciser les critères de sélection *</label>

                            <div class="col-md-6">
                                <input id="criteres_selections1" type="text" class="form-control" name="criteres_selections1" value="{{ old('criteres_selections1') }}" required autofocus>

                                @if ($errors->has('criteres_selections1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('criteres_selections1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr><h4 style="color:#3097d1;">ACCÈS VIA LES PASSERELLES</h4><hr>
                        <div class="form-group{{ $errors->has('conditions_acces') ? ' has-error' : '' }}">
                            <label for="conditions_acces" class="col-md-4 control-label">CONDITIONS D'ACCÈS *</label>

                            <div class="col-md-6">
                                <input id="conditions_acces" type="text" class="form-control" name="conditions_acces" value="{{ old('conditions_acces') }}" required autofocus>

                                @if ($errors->has('conditions_acces'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('conditions_acces') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('criteres_selections2') ? ' has-error' : '' }}">
                            <label for="criteres_selections2" class="col-md-4 control-label">Préciser les critères de sélection *</label>

                            <div class="col-md-6">
                                <input id="criteres_selections2" type="text" class="form-control" name="criteres_selections2" value="{{ old('criteres_selections2') }}" required autofocus>

                                @if ($errors->has('criteres_selections2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('criteres_selections2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr><h4 style="color:#3097d1;">OBJECTIFS, COMPÉTENCES ET DÉBOUCHÉS DE LA FORMATION</h4><hr>
                        <div class="form-group{{ $errors->has('objectifs_formation') ? ' has-error' : '' }}">
                            <label for="objectifs_formation" class="col-md-4 control-label">OBJECTIFS DE LA FORMATION (Spécifier les objectifs de cette formation)*</label>

                            <div class="col-md-6">
                                <input id="objectifs_formation" type="text" class="form-control" name="objectifs_formation" value="{{ old('objectifs_formation') }}" required autofocus>

                                @if ($errors->has('objectifs_formation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('objectifs_formation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('competences') ? ' has-error' : '' }}">
                            <label for="competences" class="col-md-4 control-label">COMPÉTENCES À ACQUÉRIR () *</label>

                            <div class="col-md-6">
                                <input id="competences" type="text" class="form-control" name="competences" value="{{ old('competences') }}" required autofocus>

                                @if ($errors->has('competences'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('competences') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('debouches_formation') ? ' has-error' : '' }}">
                            <label for="debouches_formation" class="col-md-4 control-label">DÉBOUCHÉS DE LA FORMATION ()*</label>

                            <div class="col-md-6">
                                <input id="debouches_formation" type="text" class="form-control" name="debouches_formation" value="{{ old('debouches_formation') }}" required autofocus>

                                @if ($errors->has('debouches_formation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('debouches_formation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('articulation_filiere') ? ' has-error' : '' }}">
                            <label for="articulation_filiere" class="col-md-4 control-label">ARTICULATION DE LA FILIÈRE AVEC LES AUTRES FORMATIONS</label>

                            <div class="col-md-6">
                                <input id="articulation_filiere" type="text" class="form-control" name="articulation_filiere" value="{{ old('articulation_filiere') }}" required autofocus>

                                @if ($errors->has('articulation_filiere'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('articulation_filiere') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr><h4 style="color:#3097d1;">STRATÉGIES SECTORIELLES</h4><hr>
                        <div class="form-group{{ $errors->has('strategies_sectorielles') ? ' has-error' : '' }}">
                            <label for="strategies_sectorielles" class="col-md-4 control-label">La filière s’inscrit-elle dans le cadre d’une stratégie nationale sectorielle?  *</label>

                            <div class="col-md-6">
                                <input type="radio" name="strategies_sectorielles" value="oui" id="oui" /> <label for="oui">oui</label>
                                <input type="radio" name="strategies_sectorielles" value="non" id="non" /> <label for="non">non</label>

                                @if ($errors->has('strategies_sectorielles'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('strategies_sectorielles') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr><h4 style="color:#3097d1;">COOPÉRATION INTERNATIONALE</h4><hr>
                        <div class="form-group{{ $errors->has('cooperation_internationale') ? ' has-error' : '' }}">
                            <label for="cooperation_internationale" class="col-md-4 control-label">La filière s’inscrit-elle dans le cadre d'un projet de coopération internationale? *</label>

                            <div class="col-md-6">
                                <input type="radio" name="cooperation_internationale" value="oui" id="oui" /> <label for="oui">oui</label>
                                <input type="radio" name="cooperation_internationale" value="non" id="non" /> <label for="non">non</label>

                                @if ($errors->has('cooperation_internationale'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cooperation_internationale') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr><h4 style="color:#3097d1;">COOPÉRATION NATIONALE</h4><hr>
                        <div class="form-group{{ $errors->has('cooperation_nationale') ? ' has-error' : '' }}">
                            <label for="cooperation_nationale" class="col-md-4 control-label">La filière s’inscrit-elle dans le cadre d'un projet de coopération nationale?  *</label>

                            <div class="col-md-6">
                                <input type="radio" name="cooperation_nationale" value="oui" id="oui" /> <label for="oui">oui</label>
                                <input type="radio" name="cooperation_nationale" value="non" id="non" /> <label for="non">non</label>

                                @if ($errors->has('cooperation_nationale'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cooperation_nationale') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    ENVOYER
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
