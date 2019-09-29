/*

var nb_speculation; var  specul = new Array();

function recupererSpeculation(){
    $('#nb_spec').keyup(function () {

       /!* $('.specs').change(function () {

            // alert($("#specul_1").val());

        })*!/

        nb_speculation =$(this).val();
    }).change(function () {
        nb_speculation = $(this).val();

/!*
        $('.specs').change(function () {

            // alert($("#specul_1").val());
        })*!/

    });



        $('#nb_spec').keyup(function () {
            for (var i = 1; i <= nb_speculation;i++)
            {
                specul['specul_'+i] = $("#specul_"+i).val();
            }

            $('.specs').change(function () {
                for (var i = 1; i <= nb_speculation;i++)
                {
                specul['specul_'+i] = $("#specul_"+i).val();
                    // alert($("#specul_"+i).val());

                        $('#specus_'+i).val($("#specul_"+i).val());

                }

            })

        }).change(function () {
            for (var i = 1; i <= nb_speculation;i++)
            {
                specul['specul_'+i] = $("#specul_"+i).val();
                // alert($("#specul_"+i).val());
            }
            $('.specs').change(function () {

                for (var i = 1; i <= nb_speculation;i++)
                {

                    specul['specul_'+i] = $("#specul_"+i).val();  }
            })

        });

}
// recupererSpeculation();
*/



var nb_speculation; var  specul = new Array();

function recupererSpeculation(nb_speculation){


    for (var i = 1; i <= nb_speculation;i++)
    {
        specul['specul_'+i] = $("#specul_"+i).val();
        //alert(specul);
        $('#specus_'+i).val($("#specul_"+i).val());
        $('#speculat_'+i).val($("#specul_"+i).val());
    }

    $('.specs').change(function () {
        for (var i = 1; i <= nb_speculation;i++)
        {
            specul['specul_'+i] = $("#specul_"+i).val();
           // alert($("#specul_"+i).val());

            $('#specus_'+i).val($("#specul_"+i).val());
            $('#speculat_'+i).val($("#specul_"+i).val());

        }

    })


}
$('#nb_spec').keyup(function () {
    recupererSpeculation($('#nb_spec').val());

}).change(function () {
    recupererSpeculation($('#nb_spec').val());
});