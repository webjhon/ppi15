$(document).ready(function(){
//Ao clicar no botão LOGIN/CADASTRO o usuário é levado para uma página com ambas as opções.    
    $('[name="botao_logarecadastrar"]').click(function(){
        $("#div_cadastro").hide("slow");
        $("#div_cadastro_login").show();
        $('html,body').stop().animate({scrollTop: $("#div_cadastro_login").offset().top}, 2000);
    });
//Usuário está na pagina de login, clica no cadastro some a pagina de login e vem a pagina de cadastro.    
    $("#botao_cadastro").click(function(){
        $("#div_cadastro_login").hide("slow");
        $("#div_cadastro").show("slow");
        $('html,body').stop().animate({scrollTop: $("#div_cadastro").offset().top}, 2000);
    });
//Se o usuário está na página de cadastro e lembra que já tem login, ele usa o botão pra chamar o formulário de login    
    $("#botao_login").click(function(){
        $("#div_cadastro").hide("slow");
        $("#div_cadastro_login").show("slow");
        $('html,body').stop().animate({scrollTop: $("#div_cadastro_login").offset().top}, 2000);
    });
    
//Clicando em PROJETO, o conteúdo incial da homepage some, e da espaço ao conteúdo da aba PROJETO.    
    $("#link_projeto").click(function(){
        $("#div_cadastro_login").hide("slow");
        $("#div_cadastro").hide("slow");
        $("#index_content").hide("slow");  
        $("#pagina_midia").hide("slow");
        $("#pagina_projeto").show("slow");
        
});
//Ao clicar no botão iniciar a página faz reaload, travendo novamente o conteúdo inicial do site.
$("#home_page").click(function(){
   location.reload();  
});
//Ai clicar no botão MÍDIA, a página da espaço para o conteúdo de mídia ser apresentado.
$("#link_midia").click(function(){
   $("#div_cadastro_login").hide("slow");
   $("#div_cadastro").hide("slow");
   $("#index_content").hide("slow");
   $("#pagina_projeto").hide("slow");
   $("#pagina_midia").show("slow");
});

// Código de funcionamento do botão UP, que acompanha o usuário durante a navegação na página.
$("#helper").click(function(){
      $('html, body').animate({scrollTop:0}, 'slow');
});

//Ai clicar no botão MÍDIA, a página da espaço para o conteúdo de mídia ser apresentado.
$("#link_doacao").click(function(){
   $("#div_cadastro_login").hide("slow");
   $("#div_cadastro").hide("slow");
   $("#index_content").hide("slow");
   $("#pagina_projeto").hide("slow");
   $("#pagina_doacao").show("slow");
});
    //APAGAR ESTE CÓDIGO
/*$(':input').change(function(){    
       alert("testando");
    }); */ 
    //TesteTesteTeste
});

