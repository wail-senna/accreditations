var univObject = {
    "USMBA": {
      "Faculté Chariaa": ["مسلك الشريعة والقانون", "الفقه المالكي بين التأصيل والتنزيل", "الدبلوماسية الدينية", "المالية الإسلامية","الوساطة الأسرية والاجتماعية","قضاء الأسرة","حقوق الانسان في الشريعة و القانون","المعاملات المالية في الفقه الاسلامي و التشريع الوضعي","الفقه المالكي الأصالة والتجديد","(المقارنة التشريعية (الفقهية القانونية"],
      "FLSH Dhar El Mehraz": ["Études islamiques", "Langue et littérature arabes", "Histoire et 	civilisation", "Langue et littérature anglaises","Langue et littérature françaises","Langue et littérature allemandes","Langue et littérature espagnoles","Psychologie","Psychologie","Sociologie","Géographie appliquée et développement du territoire","Tourisme, patrimoine et communication","المربي المتخصص","المساعد الإجتماعي"],
      "FSJES": ["Droit Privé Français", "Droit Privé Arabe", "Droit Public Français", "Droit Public Arabe","Sciences économiques et gestion","Back Office bancaire","Gestion des institutions à caractère social","Techniques d’assurance","Administration du personnel","Management international","Développement social","Économie de l’industrie","Culture, Management et E-commerce","Agent commercial et chargé de clientèle","Sciences des techniques comptables","Métiers de la documentation (langue arabe)"],  
      "FS Dhar El Mehraz": ["Sciences mathématiques et applications( mathématiques)", "Sciences mathématiques et applications( informatique)", "Sciences de la matière chimie", "Sciences de la matière physique","Sciences  de la terre et de l’univers","Science de la vie","Génie géologique","Techniques des systèmes électroniques et informatiques","Informatique pour les technologies nouvelles","Chimie des arômes, des parfums et des colorants naturels","Chimie industrielle","Développement et administration de bases de données","Énergétique","Gestion et traitement des eaux","Optique et optométrie","Réseaux et télécommunications"], 
      "FLSH Saïs": ["Études islamiques", "Histoire et géographie", "Langue et littérature françaises", "Langue et littérature anglaises","Langue et littérature arabes","Sciences de l’information et de la communication","Sociologie et anthropologie","Études Amazigh","Assistante sociales","Tourisme, patrimoine et communication","Tourisme et développement"], 
      "FST Saïs": ["Aménagement et gestion de l’environnement", "Géoressources", "Contrôle de la qualité des produits agro-alimentaires", "Géomatique et Aménagement du Territoire","Technologies Alimentaires","Chimie, Analyse et Contrôle","Génie Mathématiques et Informatique","Génie mécanique","Ingénierie Électronique et Télécommunications","Ingénierie Informatique, Électronique et Automatique","Ingénierie Mathématiques et Informatique","Ingénieur en Génie Électrique,option électrotechnique...","Management de la Qualité dans les Industries Agroalimentaires","Techniques d’Analyse et de Contrôle Qualité Alimentaire","Génie Informatique Décisionnelle","Génie Mathématique et Applications","Génie Biologie, option Nutrition","Ressources Naturelles, Environnement et Santé( FD-RNES)","Mathématiques et Physique Appliquées"], 
      "FMP": ["Médecine générale", "Pharmacie"], 
      "ENS": ["Master Mathématiques et Applications (MMA)", "LP d'Enseignement des Mathématiques (LPEM)", "Master Spécialisé d'Enseignement en Sciences Physiques (MSESP)", "LP d'Enseignement des Sciences Physiques et Chimiques(LPESPC)", "Master Spécialisé d'Enseignement des Sciences de la Vi..(MSESVT)", "LP d’Enseignement Des Sciences de la Vie et de la Terre (LPESVT)","LP des Métiers de l'Enseignement de l'Education Phys..(LPMEEPS)","Licence d'Éducation Enseignement Secondaire -Langue Française","الإجازة في التربية - تخصص التعليم الابتدائي","الإجازة المهنية في التربية الخاصة تخصص مهن تدريس ذوي الاحتياجات الخاصة ذهنيا","ماستر أسس التربية والتعلم","تدريس الدراسات الإسلامية","الإجازة المهنية في علم النفس و التعلم"], 
      "EST": ["Techniques de management", "Génie électrique", "Génie des procédés", "Techniques de commercialisation et de communication","Génie urbain et environnement","Techniques instrumentales","Génie mécanique et productique","Gestion logistique et transport","Génie informatique","Génie biotechnologique","Organisation et gestion des entreprises","Techniques comptables","Maintenance industrielle","Statistique et informatique industrielle","Maitrise de l’énergie et énergies renouvelables","Gestion des ressources humaines","Animation et gestion touristique","Réseaux et télécoms"], 
      "ENSA": ["Génie Industriel", "Génie Informatique", "Génie Télécommunication et Réseaux", "Génie Mécanique et Systèmes Automatisés","Génie des Systèmes Embarqués et Informatique Industrielle"], 
      "ENCG": ["Gestion", "Commerce"], 
  
    }
  }
  window.onload = function() {
    var univSel = document.getElementById("universite");
    var etabSel = document.getElementById("etablissement");
    var filiereSel = document.getElementById("filiere");
    for (var x in univObject) {
      univSel.options[univSel.options.length] = new Option(x, x);
    }
    univSel.onchange = function() {
      //empty Chapters- and Topics- dropdowns
      filiereSel.length = 1;
      etabSel.length = 1;
      //display correct values
      for (var y in univObject[this.value]) {
        etabSel.options[etabSel.options.length] = new Option(y, y);
      }
    }
    etabSel.onchange = function() {
      //empty Chapters dropdown
      filiereSel.length = 1;
      //display correct values
      var z = univObject[univSel.value][this.value];
      for (var i = 0; i < z.length; i++) {
        filiereSel.options[filiereSel.options.length] = new Option(z[i], z[i]);
      }
    }
  }