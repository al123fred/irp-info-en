<?php    
//////////////ETHNIES
    function init_ethnies(){
        $les_ethnies="Bafaw#Bakundu#Bakossi#Bakokos#Bakweris#Balong#Bankon#Bassas#Batanga#Bonkeng#Doualas#Evuzok#Malimba#Manehas#Mbo#Mouamenam#Ndonga#Pongo#Yassa#Abo#Yabassi#Arabes#Choa#Banda#Cuvok#Dourou#Fali#Gbaya#Namdji#Gude#Guidar#Guiziga#Haoussa#Hidé#Kanuri#Kapsiki#NyemNyem#Karan#Kéra#Komas#Kotoko#Kwanja#Lagwan#Mada#Mafa#Mambay#Mambila#Mandara#Massa#Mboum#Mbukou#Meta#Mfumte#Mineo#Mofu#Mouktélé#Mousgoum#Moundang#Moussey#Nsungli#Ouldémé#Peuls#Podoko#Toupouri#Sara#Vamé#Vouté#Wawa#Yamba#Zulgo#kunakuna#Babanki#Babungo#Bamiléké#Bamoun#Ngemba#Noni#Nso#Tikar#Vere#Nyamtan#Ewodi#Bodiman#Bandem#Dibom#Banen#Baoyangui#Bassoo#Bafia#Bané#Banen#Boundjou#Dzimou#Yambassa#Nyokon#Yambetta#Sanaga#Bétis#Fangs#Bulu#Maka#Badjoué#Baka#Soo#Vute#Njanpeta#Lemande#Batis#Akpwakoum#Maka#Badjoué#Gbete#Konabembe#NziméMéloon#Mpoumam#Nkounabemé#Bobilis#Pôl#Mvele#Gbaya#Kaka#Mvovon#Bikélé#Mpiemo";
            charger_table_generik_2048("ETHNIES",$les_ethnies);
    }
//////////////GRADES
    function init_grades(){
        $fic=fopen("zz_init_grades.csv", "a+");
        while($tab=fgetcsv($fic,1024,';'))
        {
            $nom=$tab[0];      $nom_complet=$tab[1];
            $VHH=$tab[2];  
            
            ajouter_grade($nom,$nom_complet,$VHH);
        } 
    }

//////////////FONCTIONS
    function init_fonctions(){
        $fic=fopen("zz_init_fonctions.csv", "a+");
        while($tab=fgetcsv($fic,1024,';'))
        {
            $nom=$tab[0];      $nom_complet=$tab[1];
            $VHH=$tab[2];  
            
            ajouter_fonction($nom,$nom_complet,$VHH);
        } 
    }

//////////////SPECIALITES
    function init_specialites(){
        $fic=fopen("zz_init_specialites.csv", "a+");
        while($tab=fgetcsv($fic,1024,';'))
        {
            $nom=$tab[0];      $nom_complet=$tab[1];
            
            ajouter_specialite($nom,$nom_complet);
        } 
    }

////////////REGIONS
    function init_regions(){
        $fic=fopen("zz_init_regions.csv", "a+");
        while($tab=fgetcsv($fic,1024,';'))
        {
            $code=$tab[0];      $nom=$tab[1];
            $chef_lieu=$tab[2];  
            
            ajouter_region($code,$nom,$chef_lieu);
        } 
    }

//////////////DEPARTEMENTS
    function init_departements(){
         $fic=fopen("zz_init_departements.csv", "a+");
        while($tab=fgetcsv($fic,1024,';'))
        {
            $code_region=$tab[0];      
            $code=$tab[1];
            $nom=$tab[2]; 
            $chef_lieu=$tab[3];
            $abbreviation=$tab[4];  
            
            ajouter_departement($code,$nom,$chef_lieu,$code_region,$abbreviation);
        } 
    }

////////////ARRONDISSEMENTS
    function init_arrondissements(){
        $fic=fopen("zz_init_arrondissements.csv", "a+");
        while($tab=fgetcsv($fic,1024,';'))
        {
            $code_dep=$tab[0];      
            $code=$tab[1];
            $nom=$tab[2]; 
            $chef_lieu=$tab[3];
            
            ajouter_arrondissement($code,$nom,$chef_lieu,$code_dep);
        } 

    }
////////////ETABLISSEMENTS
    function init_etablissements(){
        $fic=fopen("zz_init_etablissements.csv", "a+");
        while($tab=fgetcsv($fic,1024,';'))
        {
            $nom=$tab[1];   $immatriculation=$tab[2];
            $code_arr=$tab[0];  
            $is_anglo=$tab[3];       $is_franco=$tab[4];
            $is_general=$tab[5];     $is_technique=$tab[6];
            $is_normal=$tab[7];      $is_public=$tab[8];
            $has_second_cycle=$tab[9];
            $contact_tel=$tab[10];    $contact_whatsapp=$tab[11];
            $contact_email=$tab[12];  $contact_bp=$tab[13];
            $abbreviation=$tab[14];
            $eff_G=$tab[15];            $eff_F=$tab[16];     
            $eff_T=$tab[17];

            ajouter_etablissement($nom,$immatriculation,$code_arr,$is_anglo,$is_franco,$is_general,$is_technique,$is_normal,$is_public,$has_second_cycle,$contact_tel,$contact_whatsapp,$contact_email,$contact_bp,$abbreviation,$eff_G,$eff_F,$eff_T);
        } 

    }

////////////PERSONNELS
    function init_personnels(){
        $fic=fopen("zz_init_personnels.csv", "a+");
        while($tab=fgetcsv($fic,1024,';'))
        {
            $code=$tab[0];  $nom=$tab[1];$prenom=$tab[2];$sexe=$tab[3];$matricule=$tab[6];$grade=$tab[7];$specialite=$tab[8];$fonction=$tab[23];$diplome_prof=$tab[9];$diplome_univ=$tab[10];$date_entree_adm=$tab[11];$date_pspa=$tab[12];$date_naiss=$tab[4];$lieu_naiss=$tab[5];$SM=$tab[24];$nationalite=$tab[17];$region_o=$tab[18];$dep_o=$tab[19];$arr_o=$tab[20];$ethnie=$tab[21];$telephone=$tab[14];$whatsapp=$tab[15];$email=$tab[16];$langue=$tab[22];$photo="";$autre="";$nom_ets=$tab[25];
            
ajouter_personnel($code,$nom,$prenom,$sexe,$matricule,$grade,$specialite,$fonction,$diplome_prof,$diplome_univ,$date_entree_adm,$date_pspa,$date_naiss,$lieu_naiss,$SM,$nationalite,$region_o,$dep_o,$arr_o,$ethnie,$telephone,$whatsapp,$email,$langue,$photo,$autre,$nom_ets);
        } 
    }
?>