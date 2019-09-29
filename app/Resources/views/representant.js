var nom; var prenom; var mobile; var fixe; var faxe; var mail;var adr;
$('.recupNom').change(function () {
     nom=$(this).val();

});
$('.recupPrenom').change(function () {
     prenom=$(this).val();
});$('.recupAddr').change(function () {
     adr=$(this).val();
});
$('.recupMobile').change(function () {
     mobile=$(this).val();
});
$('.recupFixe').change(function () {
     fixe=$(this).val();
});
$('.recupFaxe').change(function () {
     faxe=$(this).val();
});
$('.recupMail').change(function () {
     mail=$(this).val();
});


/*$('.selectpicker').change(function () {
    setTimeout("$('.setNom').val('text'),30000");
});*/
var rep;
function chargerRep(rep) {

    if (rep=="Oui"){
       $('.setNom').val(nom);
        $('.setPrenom').val(prenom);
        $('.setMobile').val(mobile);
        $('.setFixe').val(fixe);
        $('.setFaxe').val(faxe);
        $('.setMail').val(mail);
        $('.setAddr').val(adr);
    }
    else {
        $('.setNom').val('');
        $('.setPrenom').val('');
        $('.setMobile').val('');
        $('.setFixe').val('');
        $('.setFaxe').val('');
        $('.setMail').val('');
        $('.setAddr').val('');

    }
        }

$('.repLegal').keyup(function () {
    chargerRep($('.repLegal').val() );
}).change(function () {
    chargerRep($('.repLegal').val() );
});