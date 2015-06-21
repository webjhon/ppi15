<?php
// +----------------------------------------------------------------------+
// | BoletoPhp - Vers? Beta                                              |
// +----------------------------------------------------------------------+
// | Este arquivo est?dispon?el sob a Licen? GPL dispon?el pela Web   |
// | em http://pt.wikipedia.org/wiki/GNU_General_Public_License           |
// | Voc?deve ter recebido uma c?ia da GNU Public License junto com     |
// | esse pacote; se n?, escreva para:                                   |
// |                                                                      |
// | Free Software Foundation, Inc.                                       |
// | 59 Temple Place - Suite 330                                          |
// | Boston, MA 02111-1307, USA.                                          |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------+
// | Originado do Projeto BBBoletoFree que tiveram colabora?es de Daniel |
// | William Schultz e Leandro Maniezo que por sua vez foi derivado do	  |
// | PHPBoleto de Jo? Prado Maia e Pablo Martins F. Costa				        |
// | 														                                   			  |
// | Se vc quer colaborar, nos ajude a desenvolver p/ os demais bancos :-)|
// | Acesse o site do Projeto BoletoPhp: www.boletophp.com.br             |
// +----------------------------------------------------------------------+

// +--------------------------------------------------------------------------------------------------------+
// | Equipe Coordena?o Projeto BoletoPhp: <boletophp@boletophp.com.br>              		             				|
// | Desenvolvimento Boleto Banco do Brasil: Daniel William Schultz / Leandro Maniezo / Rog?io Dias Pereira|
// +--------------------------------------------------------------------------------------------------------+


// ------------------------- DADOS DIN?ICOS DO SEU CLIENTE PARA A GERA?O DO BOLETO (FIXO OU VIA GET) -------------------- //
// Os valores abaixo podem ser colocados manualmente ou ajustados p/ formul?io c/ POST, GET ou de BD (MySql,Postgre,etc)	//

// DADOS DO BOLETO PARA O SEU CLIENTE
$dias_de_prazo_para_pagamento = 5;
$taxa_boleto = 2.95;
$data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006"; 
$valor_cobrado = "2950,00"; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
$valor_cobrado = str_replace(",", ".",$valor_cobrado);
$valor_boleto=number_format($valor_cobrado+$taxa_boleto, 2, ',', '');

$dadosboleto["nosso_numero"] = "87654";
$dadosboleto["numero_documento"] = "27.030195.10";	// Num do pedido ou do documento
$dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
$dadosboleto["data_documento"] = date("d/m/Y"); // Data de emiss? do Boleto
$dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
$dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com v?gula e sempre com duas casas depois da virgula

// DADOS DO SEU CLIENTE
$dadosboleto["sacado"] = "Nome do seu Cliente";
$dadosboleto["endereco1"] = "Endere? do seu Cliente";
$dadosboleto["endereco2"] = "Cidade - Estado -  CEP: 00000-000";

// INFORMACOES PARA O CLIENTE
$dadosboleto["demonstrativo1"] = "Pagamento de Doação ao Projeto Logicando";
$dadosboleto["demonstrativo2"] = "Você esta colaborando um projeto social - R$ ".number_format($taxa_boleto, 2, ',', '');
$dadosboleto["demonstrativo3"] = "Logicando:";

// INSTRU?ES PARA O CAIXA
$dadosboleto["instrucoes1"] = "- Sr. Caixa, cobrar multa de 2% ap? o vencimento";
$dadosboleto["instrucoes2"] = "- Receber at?10 dias ap? o vencimento";
$dadosboleto["instrucoes3"] = "- Em caso de d?vidas entre em contato conosco: xxxx@xxxx.com.br";
$dadosboleto["instrucoes4"] = "&nbsp; Emitido pelo sistema Projeto BoletoPhp - www.boletophp.com.br";

// DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
$dadosboleto["quantidade"] = "10";
$dadosboleto["valor_unitario"] = "10";
$dadosboleto["aceite"] = "N";		
$dadosboleto["especie"] = "R$";
$dadosboleto["especie_doc"] = "DM";


// ---------------------- DADOS FIXOS DE CONFIGURA?O DO SEU BOLETO --------------- //


// DADOS DA SUA CONTA - BANCO DO BRASIL
$dadosboleto["agencia"] = "9999"; // Num da agencia, sem digito
$dadosboleto["conta"] = "99999"; 	// Num da conta, sem digito

// DADOS PERSONALIZADOS - BANCO DO BRASIL
$dadosboleto["convenio"] = "7777777";  // Num do conv?io - REGRA: 6 ou 7 ou 8 d?itos
$dadosboleto["contrato"] = "999999"; // Num do seu contrato
$dadosboleto["carteira"] = "18";
$dadosboleto["variacao_carteira"] = "-019";  // Varia?o da Carteira, com tra? (opcional)

// TIPO DO BOLETO
$dadosboleto["formatacao_convenio"] = "7"; // REGRA: 8 p/ Conv?io c/ 8 d?itos, 7 p/ Conv?io c/ 7 d?itos, ou 6 se Conv?io c/ 6 d?itos
$dadosboleto["formatacao_nosso_numero"] = "2"; // REGRA: Usado apenas p/ Conv?io c/ 6 d?itos: informe 1 se for NossoN?mero de at?5 d?itos ou 2 para op?o de at?17 d?itos

/*
#################################################
DESENVOLVIDO PARA CARTEIRA 18

- Carteira 18 com Convenio de 8 digitos
  Nosso n?mero: pode ser at?9 d?itos

- Carteira 18 com Convenio de 7 digitos
  Nosso n?mero: pode ser at?10 d?itos

- Carteira 18 com Convenio de 6 digitos
  Nosso n?mero:
  de 1 a 99999 para op?o de at?5 d?itos
  de 1 a 99999999999999999 para op?o de at?17 d?itos

#################################################
*/


// SEUS DADOS
$dadosboleto["identificacao"] = "Projeto Logicando - Estimulando a lógica nas séries iniciais";
$dadosboleto["cpf_cnpj"] = "";
$dadosboleto["endereco"] = "Muito Obrigado por colaborar!";
$dadosboleto["cidade_uf"] = "Panambi/Rio Grande do Sul";
$dadosboleto["cedente"] = "Projeto Logicando";

// N? ALTERAR!
include("include/funcoes_bb.php"); 
include("include/layout_bb.php");
?>
