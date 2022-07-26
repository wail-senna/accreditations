@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="title">
                    <h2>Ajouter Coordonnateur</h2>
                    <h4>entrer les information suivantes pour créer un coordonnateur !</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('Coordonnateur.create') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('filiere') ? ' has-error' : '' }}">
                            <label for="filiere" class="col-md-4 control-label">filiere</label>

                            <div class="col-md-6">
                            <select name="filiere" class="role">
                                <optgroup label="Faculté Chariaa"> <!-- To create nested options for categories use "optgroup" -->
                                    <option>مسلك الشريعة والقانون</option>
                                    <option>الفقه المالكي بين التأصيل والتنزيل</option>
                                    <option>الدبلوماسية الدينية</option>
                                    <option>المالية الإسلامية</option>
                                    <option>الوساطة الأسرية والاجتماعية</option>
                                    <option>قضاء الأسرة</option>
                                    <option>حقوق الانسان في الشريعة و القانون</option>
                                    <option>المعاملات المالية في الفقه الاسلامي و التشريع الوضعي</option>
                                    <option>الفقه المالكي الأصالة والتجديد</option>
                                    <option>(المقارنة التشريعية (الفقهية القانونية</option>
                                </optgroup>
                                <optgroup label="FLSH Dhar El Mehraz"> <!-- To create nested options for categories use "optgroup" -->
                                    <option>Études islamiques</option>
                                    <option>Langue et littérature arabes</option>
                                    <option>Histoire et civilisation</option>
                                    <option>Langue et littérature anglaises</option>
                                    <option>Langue et littérature françaises</option>
                                    <option>Langue et littérature allemandes</option>
                                    <option>Langue et littérature espagnoles</option>
                                    <option>Psychologie</option>
                                    <option>Philosophie</option>
                                    <option>Sociologie</option>
                                    <option>Géographie appliquée et développement du territoire</option>
                                    <option>Tourisme, patrimoine et communication</option>
                                    <option>المربي المتخصص</option>
                                    <option>المساعد الإجتماعي</option>
                                </optgroup>
                                <optgroup label="FSJES"> 
                                    <option>Droit Privé Français</option>
                                    <option>Droit Privé Arabe</option>
                                    <option>Droit Public Français</option>
                                    <option>Droit Public Arabe</option>
                                    <option>Sciences économiques et gestion</option>
                                    <option>Back Office bancaire</option>
                                    <option>Gestion des institutions à caractère social</option>
                                    <option>Techniques d’assurance</option>
                                    <option>Administration du personnel</option>
                                    <option>Management international</option>
                                    <option>Développement social</option>
                                    <option>Économie de l’industrie</option>
                                    <option>Culture, Management et E-commerce</option>
                                    <option>Agent commercial et chargé de clientèle</option>
                                    <option>Sciences des techniques comptables</option>
                                    <option>Métiers de la documentation (langue arabe)</option>
                                </optgroup>
                                <optgroup label="FS Dhar El Mehraz"> 
                                    <option>Sciences mathématiques et applications( mathématiques)</option>
                                    <option>Sciences mathématiques et applications( informatique)</option>
                                    <option>Sciences de la matière chimie</option>
                                    <option>Sciences de la matière physique</option>
                                    <option>Sciences  de la terre et de l’univers</option>
                                    <option>Science de la vie</option>
                                    <option>Génie géologique</option>
                                    <option>Techniques des systèmes électroniques et informatiques</option>
                                    <option>Informatique pour les technologies nouvelles</option>
                                    <option>Chimie des arômes, des parfums et des colorants naturels</option>
                                    <option>Chimie industrielle</option>
                                    <option>Développement et administration de bases de données</option>
                                    <option>Énergétique</option>
                                    <option>Gestion et traitement des eaux</option>
                                    <option>Optique et optométrie</option>
                                    <option>Réseaux et télécommunications</option>
                                </optgroup>
                                <optgroup label="FLSH Saïs"> 
                                    <option>Études islamiques</option>
                                    <option>Histoire et géographie</option>
                                    <option>Langue et littérature françaises</option>
                                    <option>Langue et littérature anglaises</option>
                                    <option>Langue et littérature arabes</option>
                                    <option>Sciences de l’information et de la communication</option>
                                    <option>Sociologie et anthropologie</option>
                                    <option>Études Amazigh</option>
                                    <option>Assistante sociales</option>
                                    <option>Tourisme, patrimoine et communication</option>
                                    <option>Tourisme et développement</option>
                                </optgroup>
                                <optgroup label="FST Saïs"> 
                                    <option>Aménagement et gestion de l’environnement</option>
                                    <option>Géoressources</option>
                                    <option>Contrôle de la qualité des produits agro-alimentaires</option>
                                    <option>Géomatique et Aménagement du Territoire</option>
                                    <option>Technologies Alimentaires</option>
                                    <option>Chimie, Analyse et Contrôle</option>
                                    <option>Génie Mathématiques et Informatique</option>
                                    <option>Génie mécanique</option>
                                    <option>Ingénierie Électronique et Télécommunications</option>
                                    <option>Ingénierie Informatique, Électronique et Automatique</option>
                                    <option>Ingénierie Mathématiques et Informatique</option>
                                    <option>Ingénieur en Génie Électrique,option électrotechnique...</option>
                                    <option>Management de la Qualité dans les Industries Agroalimentaires</option>
                                    <option>Techniques d’Analyse et de Contrôle Qualité Alimentaire</option>
                                    <option>Génie Informatique Décisionnelle</option>
                                    <option>Génie Mathématique et Applications</option>
                                    <option>Génie Biologie, option Nutrition</option>
                                    <option>Ressources Naturelles, Environnement et Santé( FD-RNES)</option>
                                    <option>Mathématiques et Physique Appliquées</option>
                                </optgroup>
                                <optgroup label="FMP">
                                    <option>Médecine générale</option>
                                    <option>Pharmacie</option>
                                </optgroup>
                                <optgroup label="ENS"> <!-- To create nested options for categories use "optgroup" -->
                                    <option>Master Mathématiques et Applications (MMA)</option>
                                    <option>LP d'Enseignement des Mathématiques (LPEM)</option>
                                    <option>Master Spécialisé d'Enseignement en Sciences Physiques (MSESP)</option>
                                    <option>LP d'Enseignement des Sciences Physiques et Chimiques(LPESPC)</option>
                                    <option>Master Spécialisé d'Enseignement des Sciences de la Vi..(MSESVT)</option>
                                    <option>LP d’Enseignement Des Sciences de la Vie et de la Terre (LPESVT)</option>
                                    <option>LP des Métiers de l'Enseignement de l'Education Phys..(LPMEEPS)</option>
                                    <option>Licence d'Éducation Enseignement Secondaire -Langue Française</option>
                                    <option>الإجازة في التربية - تخصص التعليم الابتدائي</option>
                                    <option>الإجازة المهنية في التربية الخاصة تخصص مهن تدريس ذوي الاحتياجات الخاصة ذهنيا</option>
                                    <option>ماستر أسس التربية والتعلم</option>
                                    <option> تدريس الدراسات الإسلامية</option>
                                    <option>الإجازة المهنية في علم النفس و التعلم</option>
                                    <option> تدريس التاريخ والجغرافيا</option>
                                </optgroup>
                                <optgroup label="EST"> <!-- To create nested options for categories use "optgroup" -->
                                    <option>Techniques de management</option>
                                    <option>Génie électrique</option>
                                    <option>Génie des procédés</option>
                                    <option>Techniques de commercialisation et de communication</option>
                                    <option>Génie urbain et environnement</option>
                                    <option>Techniques instrumentales</option>
                                    <option>Génie mécanique et productique</option>
                                    <option>Gestion logistique et transport</option>
                                    <option>Génie informatique</option>
                                    <option>Génie biotechnologique</option>
                                    <option>Organisation et gestion des entreprises</option>
                                    <option>Techniques comptables</option>
                                    <option>Maintenance industrielle</option>
                                    <option>Génie bio-industriel</option>
                                    <option>Statistique et informatique industrielle</option>
                                    <option>Maitrise de l’énergie et énergies renouvelables</option>
                                    <option>Gestion des ressources humaines</option>
                                    <option>Animation et gestion touristique</option>
                                    <option>Métiers du web</option>
                                    <option>Réseaux et télécoms</option>
                                    <option>Agroalimentaire et génie biologique</option>
                                </optgroup>
                                <optgroup label="ENSA"> <!-- To create nested options for categories use "optgroup" -->
                                    <option>Génie Industriel</option>
                                    <option>Génie Informatique</option>
                                    <option>Génie Télécommunication et Réseaux</option>
                                    <option>Génie Mécanique et Systèmes Automatisés</option>
                                    <option>Génie des Systèmes Embarqués et Informatique Industrielle</option>
                                </optgroup>
                                <optgroup label="ENCG"> <!-- To create nested options for categories use "optgroup" -->
                                    <option>Gestion</option>
                                    <option>Commerce</option>
                                </optgroup>
                            </select>
                                
                                @if ($errors->has('filiere'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('filiere') }}</strong>
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
                            <select name="role_as" class="role">
                                <option value="coordonnateur">Coordonnateur</option>
                            </select>
                                
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
