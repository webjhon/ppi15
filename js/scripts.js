$(document).ready(function(){
    $('[name="botao_logarecadastrar"]').click(function(){
        $("#div_cadastro_login").show();
        $('html,body').stop().animate({scrollTop: $("#div_cadastro_login").offset().top}, 2000);
    });
    
    $('[name="botao_cadastro"').click(function(){
        $("#div_cadastro_login").hide();
        $("#div_cadastro").show();
    });
/*$(':input').change(function(){    
       alert("testando");
    }); */    
});

