
function suiviNotification(){


    $('#suiviNotifiation').html('');
    var element=    '<thead>' +

        '                                <tr>\n' +
        '                                    <th>Résultats investigations</th>\n' +
        '                                    <th>Mesures correctives préconisées</th>\n' +
        '                                    <th>Responsable de la mise en œuvre</th>\n' +
        '                                    <th>Date de limite de mise en œuvre</th>\n' +
        '                                </tr>\n' +
        '                                </thead>'

    ;
    // var contenu ='';

    for(var i=1; i<= 2; i++){
        // var onglet=('<li ><a href="#onglet-'+i+'">Enfant'+i+'</a></li>');

        element+=(   '<tbody>'+
            '<tr>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="resutInvestig_'+i+'" /></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="mesureCorrectivePreconise_'+i+'" /></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="respMiseOeuvre_'+i+'"  /></td>'+
            '<td > <input  class="form-control" style="margin: 0px; width: 100%; outline: none; " name="dateLimiteMiseOeuvre_'+i+'"  /></td>'+
            '</tr>'+
            '<tbody>'
        );

    }
    $('#suiviNotifiation').html(element);



    setTimeout("$('#suiviNotifiation').editableTableWidget().find('td:first').focus(),3000");
    $('#editable-datatable').editableTableWidget().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();
    });


}
suiviNotification();