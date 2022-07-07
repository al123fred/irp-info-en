<?php    
    require('configurations/connexion.php');
    
    include('fonctions/fonctions_BD.php');
    include('fonctions/fonctions_BD_querry.php');
    include('zz_init.php');

    //init_ethnies();
    //init_grades();
    //init_fonctions();
    //init_specialites();
    //init_regions();
    //init_departements();
    //init_arrondissements();
    //init_etablissements();
    init_personnels();
       
?>