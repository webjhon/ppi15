$(document).ready(function(){
    $('[name="botao_logarecadastrar"]').click(function(){
        $("#div_cadastro").hide("slow");
        $("#div_cadastro_login").show();
        $('html,body').stop().animate({scrollTop: $("#div_cadastro_login").offset().top}, 2000);
    });
    
    $("#botao_cadastro").click(function(){
        $("#div_cadastro_login").hide("slow");
        $("#div_cadastro").show("slow");
        $('html,body').stop().animate({scrollTop: $("#div_cadastro").offset().top}, 2000);
    });
    
    $("#botao_login").click(function(){
        $("#div_cadastro").hide("slow");
        $("#div_cadastro_login").show("slow");
        $('html,body').stop().animate({scrollTop: $("#div_cadastro_login").offset().top}, 2000);
    });
    
    
    $("#link_projeto").click(function(){
        $("#index_content").hide("slow");
        $("#pagina_projeto").show("slow");
});
    

    //APAGAR ESTE CÓDIGO
/*$(':input').change(function(){    
       alert("testando");
    }); */ 
    //TesteTesteTeste
});

