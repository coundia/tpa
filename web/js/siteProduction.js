
function ajoutSite(){


    $('#mainTable').html('');
    var element=    '<thead>' +

        '                                <tr>\n' +
        '                                    <th>Périmètres</th>\n' +
        '                                    <th>Superficie</th>\n' +
        '                                    <th>Localisation</th>\n' +
        '                                    <th>Spéculations</th>\n' +
        '                                    <th>Regies ou Vulgarisation</th>\n' +
        '                                </tr>\n' +
        '                                </thead>'

    ;
    // var contenu ='';

    for(var i=1; i<= 5; i++){
        // var onglet=('<li ><a href="#onglet-'+i+'">Enfant'+i+'</a></li>');

        element+=(   '<tbody>'+
            '<tr>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="perimetre_'+i+'" /></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="superficie_'+i+'" /></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="localisation_'+i+'"  /></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="speculation_'+i+'"  /></td>'+
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
function ajoutCalendar(){


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

    for(var i=1; i<= 4; i++){
        // var onglet=('<li ><a href="#onglet-'+i+'">Enfant'+i+'</a></li>');

        element+=(   '<tbody>'+
            '<tr>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="spec_'+i+'" /></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="surface_'+i+'" /></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="destination_'+i+'"  /></td>'+
            '<td > ' +
                ' <div class="col-md-4">'+
                '<div class="form-group" >'+
                '<div class="input-group date datetimepicker7" id="">'+
                '  <input type="text" class="form-control" name="date_debut_'+i+'" />'+
                ' <span class="input-group-addon">'+
                // '<span class="glyphicon glyphicon-calendar"></span>'+
                ' </span>'+
                ' </div>'+
            '</div>'+
            '</div>'+
            ' <div class="col-md-4">'+
            '   <div class="form-group">'+
            '<div class="input-group date datetimepicker7 " >'+
            '  <input type="text" class="form-control" name="date_fin_'+i+'"  />'+
            ' <span class="input-group-addon">'+
            // '<span class="glyphicon glyphicon-calendar"></span>'+
            ' </span>'+
            ' </div>'+
            ' </div>'+
                '</div>'+
                '</td>'+
            '</tr>'+
            '<tbody>'
        );

        setTimeout($(function () {
            $('#datetimepicker6').datepicker;
            $('.datetimepicker7').datepicker({
                useCurrent: false //Important! See issue #1075
            });
            $('#datetimepicker6').on("dp.change", function (e) {
                $('.datetimepicker7').data("DateTimePicker").minDate(e.date);
            });
            $('.datetimepicker7').on("dp.change", function (e) {
                $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
            });

            // element+=contenu;
        }),3000);
    }


   $('#mainTable1').html(element);




    setTimeout("$('#mainTable1').editableTableWidget().find('td:first').focus(),3000");
    $('#editable-datatable').editableTableWidget().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();
    });




}
function ajoutSiteCond(){


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

    for(var i=1; i<= 5; i++){
        // var onglet=('<li ><a href="#onglet-'+i+'">Enfant'+i+'</a></li>');

        element+=(   '<tbody>'+
            '<tr>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="speculation_'+i+'"  /></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="siteCond_'+i+'" /></td>'+
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
ajoutSite( );
ajoutCalendar();
ajoutSiteCond();