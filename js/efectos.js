$(document).ready(function(){
    
    // Scroll Elementos Menu
        var acercaDe = $('#acerca-de').offset().top,
            proyectos = $('#proyectos').offset().top,
            contacto = $('#contacto').offset().top;
    
        $('#btn-acerca-de').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: acercaDe - 100
            }, 500);
        });
    
        $('#btn-proyecto').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: proyectos
            }, 500);
        });
    
        $('#btn-contacto').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: contacto
            }, 500);
        });

    
    });