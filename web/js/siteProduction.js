var nb_specs;
function ajoutSite(nb_sp){


    $('#mainTable').html('');
    var element=    '<thead>' +

        '                                <tr>\n' +
        '                                    <th>Vergers</th>\n' +
        '                                    <th>Superficie</th>\n' +
        '                                    <th>Localisation</th>\n' +
        //'                                    <th>Superficie</th>\n' +
        // '                                    <th>Superficie</th>\n' +
        '                                </tr>\n' +
        '                                </thead>'

    ;
    // var contenu ='';

    for(var i=1; i<= nb_sp; i++){
        // var onglet=('<li ><a href="#onglet-'+i+'">Enfant'+i+'</a></li>');

        element+=(   '<tbody>'+
            '<tr>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="perimetre_'+i+'" /></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="superficie_'+i+'" /></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="localisation_'+i+'"  /></td>'+
            // '<td >  <select class="form-control specs" style="margin: 0px; width: 100%; outline: none; " id="specul_'+i+'"  name="speculation_'+i+'">'+
            // '<option value="Mangue">Mangue</option>'+
            //'<option value="Mais doux">Mais doux</option>'+
            //'<option value="haricots">haricots</option>'+
            //'</select></td>'+

            //'<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="regie_'+i+'" /></td>'+
            '</tr>'+
            '<tbody>'
        );

    }
    $('#mainTable').html(element);



    setTimeout("$('#mainTable').editableTableWidget().find('td:first').focus(),3000");
    $('#editable-datatable').editableTableWidget().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();
    });


}
function ajoutCalendar(nb_sp){


    $('#mainTable1').html('');
    var element=    '<thead>' +

        '                                <tr>\n' +
        // '                                    <th>Spéculations</th>\n' +
        '                                    <th>Démarrage exportation</th>\n' +
        // '                                    <th>Surface Cultivée (Ha)</th>\n' +
        '                                    <th>Pays de destination</th>\n' +
        '                                    <th>Fin exportation</th>\n' +
        '                                </tr>\n' +
        '                                </thead>'

    ;
    // var contenu ='';

    for(var i=1; i<= nb_sp; i++){
        // var onglet=('<li ><a href="#onglet-'+i+'">Enfant'+i+'</a></li>');

        element+=(   '<tbody>'+
            '<tr>'+
            // '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " id="specus_'+i+'" name="spec_'+i+'" /></td>'+
            // '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="surface_'+i+'" /></td>'+
            '<td ><input type="date" class="form-control" name="date_debut_'+i+'" placeholder="Date début"/></td>'+

            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none;" name="destination_'+i+'"  /></td>'+
            '<td > <input type="date" class="form-control" name="date_fin_'+i+'" placeholder="Date fin" /></td>'+
            /*'<td > ' +
                ' <div class="col-md-4">'+
                '<div class="form-group" >'+
                '<div class="input-group  " id="datetimepicker6">'+
                '  <input type="date" class="form-control" name="date_debut_'+i+'" placeholder="Date début"/>'+
                ' <span class="input-group-addon">'+
                // '<span class="glyphicon glyphicon-calendar"></span>'+
                ' </span>'+
                ' </div>'+
            '</div>'+
            '</div>'+
            ' <div class="col-md-4">'+
            '   <div class="form-group">'+
            '<div class="input-group " id="datetimepicker7 " >'+
            ' '+
            ' <span class="input-group-addon">'+
            // '<span class="glyphicon glyphicon-calendar"></span>'+
            ' </span>'+
            ' </div>'+
            ' </div>'+
                '</div>'+
                '</td>'+*/
            '</tr>'+
            '<tbody>'+
            '<script> $(\'#datetimepicker7\').datepicker( );' +
            '</script>;'
            /*   '<script>' +
           '        setTimeout($(function () {\n' +
           '            $(\'#datetimepicker6\').datepicker;\n' +
           '            $(\'#datetimepicker7\').datepicker({\n' +
           '                useCurrent: false //Important! See issue #1075\n' +
           '            });\n' +
           '            $(\'#datetimepicker6\').on("dp.change", function (e) {\n' +
           '                $(\'#datetimepicker7\').data("DateTimePicker").minDate(e.date);\n' +
           '            });\n' +
           '            $(\'#datetimepicker7\').on("dp.change", function (e) {\n' +
           '                $(\'#datetimepicker6\').data("DateTimePicker").maxDate(e.date);\n' +
           '            });\n' +
           '            // element+=contenu;\n' +
           '        }),3000);'+
               '   </script>'*/
        );

    }


    $('#mainTable1').html(element);




    setTimeout("$('#mainTable1').editableTableWidget().find('td:first').focus(),3000");
    $('#editable-datatable').editableTableWidget().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();
    });




}
function ajoutSiteCond(nb_sp){


    $('#mainTable2').html('');

    var element=    '<thead>' +

        '                                <tr>\n' +
         '                                    <th>Zone</th>\n' +
        '                                    <th>Centre de Conditionnement</th>\n' +
        '                                    <th>Localisation</th>\n' +
        '                                </tr>\n' +
        '                                </thead>'

    ;
    // var contenu ='';

    for(var i=1; i<= nb_sp; i++){
        // var onglet=('<li ><a href="#onglet-'+i+'">Enfant'+i+'</a></li>');

        element+=(   '<tbody>'+

'<input type="text"> '+

            '<tbody>'
        );

    }
    $('#mainTable2').html(element);



    setTimeout("$('#mainTable2').editableTableWidget().find('td:first').focus(),3000");
    $('#editable-datatable').editableTableWidget().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();
    });


}


//gestion des filtres
/*
     * trigger="true" permet de dire que c'est l'élément le plus haut qui fait varier toutes les autres listes
     * target=[id_cible] permet de spécifier la liste qui doit varier au changement de la sélection
     * reference=[id_reference] est l'id de l'élément parent qui déclenche la mise à jour de la liste
   */

//Fonction qui s'occupe de la mise à jour des listes
function updateSelectBox(object){
    // Object correspond au input qui déclenche l'action (pays dans notre cas)
    // On récupère le select (département) qui doit être mise à jour suite au changement du parent (pays)
    var target = $("#"+object.attr('target'));

    // On récupère tous les optgroup du select cible spécifié avec target (les optgroup du select département)
    var listGroups = target.find("optgroup");

    // On récupère le optgroup qui correspond à la valeur courante du select parent (pays)
    var validGroup = target.find("optgroup[reference='"+object.find(':selected').val()+"']");

    //On modifie la valeur courante du select cible (département)
    target.val(validGroup.find("option").val());

    //On cache tous les optgroup de département
    listGroups.hide();

    //On affiche uniquement le optgroup de département qui correspond à la valeur courante de pays
    validGroup.show();

    //On vérifie si la cible (département) doit déclencher une mise à jour d'une autre liste
    // Département peut par exemple déclencher la mise à jour des villes, et les villes déclenches celle des quartiers...
    if(target.attr('content-type')=='choices')
        target.change();
}

//On associe la fonction updateSelectBox à l'événement onchange des listes qui doivent déclencher des mises à jour d'autres listes
$("select[content-type='choices']").on('change',function(){
    updateSelectBox($(this));
});

//On fait la première mise à jour des
$(document).ready(function(){
    updateSelectBox($("select[trigger='true']"));
});




// On l'utilise :

//Création de la balise


$('#nb_spec').keyup(function () {
    ajoutSite($('#nb_spec').val() );
    ajoutCalendar($('#nb_spec').val());
     //ajoutSiteCond($('#nb_spec').val());



}).change(function () {
    ajoutSite($('#nb_spec').val() );
    ajoutCalendar($('#nb_spec').val());
     //ajoutSiteCond($('#nb_spec').val());

});
//Le code présent ici sera exécuté lorsque le script aura été entièrement téléchargé





/*
$('#note_1').keyup(function () {
    alert(document.getElementById('note_1').textContent);



}).change(function () {
    alert(document.getElementById('note_1').textContent);

});*/
//alert();

/*function recuperer() {
    var valeur=document.getElementById('note_1').textContent;
    alert(valeur);
    document.getElementById('note_td_1').value = valeur;
    //alert(valeur);
}*/

var valeur =new Array();
function recuperer() {
    for (var i = 1; i <=11; i++){
        valeur[i]=  document.getElementById('note_'+i).textContent;
        // valeur[i]=  2;

        document.getElementById('note_td_'+i).value = valeur[i];
    }
    //alert(valeur[11]);

}



var valeurs =new Array();
function recuperers() {
    for (var i = 1; i <=3; i++){
        valeurs[i]=  document.getElementById('notes_'+i).textContent;
        // valeur[i]=  2;

        document.getElementById('notes_td_'+i).value = valeurs[i];
    }
    //alert(valeurs[1]);

}






var valeurss =new Array();
function recupere() {
    for (var i = 1; i <=2; i++){
        valeurss[i]=  document.getElementById('notess_'+i).textContent;
        // valeur[i]=  2;

        document.getElementById('notess_td_'+i).value = valeurss[i];
    }
   // alert(valeurss[1]);

}













var valeursss =new Array();
function recuperec() {
    for (var i = 1; i <=6; i++){
        valeursss[i]=  document.getElementById('notesss_'+i).textContent;
        // valeur[i]=  2;

        document.getElementById('notesss_td_'+i).value = valeursss[i];
    }
    // alert(valeursss[6]);

}









/*
function recupere() {
    alert();
    var valeur =new Array();
    for (var i = 1; i <=11; i++){
        valeur[i]=  document.getElementById('note_'+i+).textContent;
        // valeur[i]=  2;
        alert(valeur[i]);
        document.getElementById('note_td_'[i]).value = valeur;
    }

    //alert(valeur);
}*/
