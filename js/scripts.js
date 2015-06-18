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
        $("#pagina_doacao").hide("slow");
        $("#pagina_projeto").show("slow");
        $('html,body').stop().animate({scrollTop: $("#pagina_projeto").offset().top}, 2000);
        
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
   $("#pagina_doacao").hide("slow");
   $("#pagina_midia").show("slow");
   $('html,body').stop().animate({scrollTop: $("#pagina_midia").offset().top}, 2000);
});

// Código de funcionamento do botão UP, que acompanha o usuário durante a navegação na página.
$("#helper").click(function(){
      $('html, body').stop().animate({scrollTop:0}, 'slow');
});

//Ai clicar no botão DOAÇÃO, a página da espaço para o conteúdo de mídia ser apresentado.
$("#link_doacao").click(function(){
   $("#div_cadastro_login").hide("slow");
   $("#div_cadastro").hide("slow");
   $("#index_content").hide("slow");
   $("#pagina_projeto").hide("slow");
   $("#pagina_midia").hide("slow");
   $("#pagina_doacao").show("slow");
   $('html,body').stop().animate({scrollTop: $("#pagina_doacao").offset().top}, 2000);

});
//O código abaixo, faz com que o menu da pagina doação altere entre as opções do usuário. 
$('[name="porque_doar"]').click(function(){
    $("#brindes").hide("slow");
    $("#brindes_midia").hide("slow");
    $("#como_doar").hide("slow");
    $("#como_doar_midia").hide("slow");
    $("#entidades").hide("slow");
    $("#entidades_midia").hide("slow");
    $("#porque_doar").show("slow");
    $("#porque_doar_midia").show("slow");
    $('html,body').stop().animate({scrollTop: $("#porque_doar").offset().top}, 2000);
});
$('[name="entidades"]').click(function(){
    $("#brindes").hide("slow");
    $("#brindes_midia").hide("slow");
    $("#como_doar").hide("slow");
    $("#como_doar_midia").hide("slow");
    $("#porque_doar").hide("slow");
    $("#porque_doar_midia").hide("slow");
    $("#entidades").show("slow");
    $("#entidades_midia").show("slow");
    $('html,body').stop().animate({scrollTop: $("#entidades").offset().top}, 2000);
});
$('[name="como_doar"]').click(function(){
    $("#brindes").hide("slow");
    $("#brindes_midia").hide("slow");
    $("#porque_doar").hide("slow");
    $("#porque_doar_midia").hide("slow");
    $("#entidades").hide("slow");
    $("#entidades_midia").hide("slow");
    $("#como_doar").show("slow");
    $("#como_doar_midia").show("slow");
    $('html,body').stop().animate({scrollTop: $("#como_doar").offset().top}, 2000);
});
$('[name="brindes"]').click(function(){
    $("#porque_doar").hide("slow");
    $("#porque_doar_midia").hide("slow");
    $("#entidades").hide("slow");
    $("#entidades_midia").hide("slow");
    $("#como_doar").hide("slow");
    $("#como_doar_midia").hide("slow");
    $("#brindes").show("slow");
    $("#brindes_midia").show("slow");
    $('html,body').stop().animate({scrollTop: $("#brindes").offset().top}, 2000);
});

//O Código abaixo, identifica se o usuário já esta ou não logado antes de direcionar ao módulo de doação

$("#botao_doacao").click(function(){
  var logado = "<?php echo $logado;?>";
  if(logado === 1){
    //$("#formulario_doacao").show("slow");
    //$('html,body').stop().animate({scrollTop: $("#formulario_doacao").offset().top}, 2000);
    alert("logado");
  }
  else {
    $("#div_cadastro_login").show();
    $('html,body').stop().animate({scrollTop: $("#div_cadastro_login").offset().top}, 2000);
  }
});


    //APAGAR ESTE CÓDIGO
/*$(':input').change(function(){    
       alert("testando");
    }); */ 
    //TesteTesteTeste
});

