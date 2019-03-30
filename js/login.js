$(document).ready(function(){
    
    
        var email = $('#exampleInputEmail1'),
            proyectos = $('#exampleInputPassword1');
    
        $('#enviar').on('click', function(e){
            e.preventDefault();
            if (email.val() == "vanilla@tech.com" && proyectos.val() == "123456"){
                var url = "Bienvenida.html"; 
                $(location).attr('href',url);
            }
        });
});