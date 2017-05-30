$(document).ready(function(){

    $( "#video" ).hide();
    $( ".overlay" ).hide();

    $("#button").click(function(){
        $( "#video" ).show();
        $( ".overlay" ).show();
        $( "header" ).hide();
        $( ".container-flex" ).hide();
    });

    $("img#cross-close").click(function(){
        $( "#video" ).hide();
        $( ".overlay" ).hide();
        $( "header" ).show();
        $( ".container-flex" ).show();
    });

});