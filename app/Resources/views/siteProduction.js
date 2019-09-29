var nb_specs;
function ajoutSite(nb_sp){


    $('#mainTable').html('');
    var element=    '<thead>' +

        '                                <tr>\n' +
        '                                    <th>Vergers</th>\n' +
        // '                                    <th>Superficie</th>\n' +
        '                                    <th>Localisation</th>\n' +
        '                                    <th>Superficie</th>\n' +
        // '                                    <th>Regies ou Vulgarisation</th>\n' +
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
            '<td >  <select class="form-control specs" style="margin: 0px; width: 100%; outline: none; " id="specul_'+i+'"  name="speculation_'+i+'">'+
            '<option value="Mangue">Mangue</option>'+
            '<option value="Mais doux">Mais doux</option>'+
            '<option value="haricots">haricots</option>'+
            '</select></td>'+

            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="regie_'+i+'" /></td>'+
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
        '                                    <th>Spéculations</th>\n' +
        '                                    <th>Surface Cultivée (Ha)</th>\n' +
        '                                    <th>Destination</th>\n' +
        '                                    <th>Saison</th>\n' +
        '                                </tr>\n' +
        '                                </thead>'

    ;
    // var contenu ='';

    for(var i=1; i<= nb_sp; i++){
        // var onglet=('<li ><a href="#onglet-'+i+'">Enfant'+i+'</a></li>');

        element+=(   '<tbody>'+
            '<tr>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " id="specus_'+i+'" name="spec_'+i+'" /></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="surface_'+i+'" /></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="destination_'+i+'"  /></td>'+
            '<td > ' +
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
            '  <input type="date" class="form-control" name="date_fin_'+i+'" placeholder="Date fin" />'+
            ' <span class="input-group-addon">'+
            // '<span class="glyphicon glyphicon-calendar"></span>'+
            ' </span>'+
            ' </div>'+
            ' </div>'+
                '</div>'+
                '</td>'+
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
        '                                    <th>Spéculations</th>\n' +
        '                                    <th>Site de Conditionnement</th>\n' +
        '                                    <th>Localisation</th>\n' +
        '                                </tr>\n' +
        '                                </thead>'

    ;
    // var contenu ='';

    for(var i=1; i<= nb_sp; i++){
        // var onglet=('<li ><a href="#onglet-'+i+'">Enfant'+i+'</a></li>');

        element+=(   '<tbody>'+
            '<tr>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " id="speculat_'+i+'" name="speculation_'+i+'"  /></td>'+
            // '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="siteCond_'+i+'" /></td>'+

            '<td >  <select class="form-control " style="margin: 0px; width: 100%; outline: none; "   name="siteCond_'+i+'">'+
            '<option value=""></option>'+
            '<option value=""></option>'+
            '<option value=""></option>'+
            '</select></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="localisation_'+i+'"  /></td>'+
            '</tr>'+
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

/*

var nb_speculation; var  specul = new Array();

function recupererSpeculation(nb_speculation){

alert('krtk,tkrt');
        for (var i = 1; i <= nb_speculation;i++)
        {
            specul['specul_'+i] = $("#specul_"+i).val();
        }

        $('.specs').change(function () {
            for (var i = 1; i <= nb_speculation;i++)
            {
                specul['specul_'+i] = $("#specul_"+i).val();
                 alert($("#specul_"+i).val());

                $('#specus_'+i).val($("#specul_"+i).val());

            }

        })


}*/

$('#nb_spec').keyup(function () {
    ajoutSite($('#nb_spec').val() );
    ajoutCalendar($('#nb_spec').val());
    ajoutSiteCond($('#nb_spec').val());



}).change(function () {
    ajoutSite($('#nb_spec').val() );
    ajoutCalendar($('#nb_spec').val());
    ajoutSiteCond($('#nb_spec').val());

});







