$(document).ready(function(){
    $(".mostrar_sprint").toggle(
            function () {
                $(this).closest('.thumbnail').closest('.thumbnail-hover').animate({"width":"100%"},500);

            },
            function () {
                $(this).closest('.thumbnail').closest('.thumbnail-hover').animate({"width":"10%"},500);            } 
        );  
});
