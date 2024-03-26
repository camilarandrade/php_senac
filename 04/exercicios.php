<?php
/*
    FLOATS E BOOLEANOS

    Exercício 1 - Índice de Massa Corporal (IMC):
    Solicite ao usuário que insira sua altura (em metros) e peso (em quilogramas). Calcule o IMC usando a fórmula IMC = peso / (altura * altura). Exiba o resultado e informe se o usuário está abaixo do peso, com peso normal, com sobrepeso ou obeso, com base nos intervalos de IMC padrão.

    */

    $peso = 60 ;
    $altura = 1.67 ;
 
    $imc = $peso / ($altura * $altura);
    echo "Seu IMC é: $imc <br>";
   
    if ($imc < 18.5){
        echo "Você está abaixo do peso <br>";
    } else if($imc >= 18.5 && $imc <= 25){
        echo "Seu peso está normal <br>";
    } else if($imc>= 25 && $imc <= 30) {
        echo "Você está com sobrepeso <br>";
    } else{
        echo "Você está obeso. <br>";
    }
 

    /* Exercício 2 - Verificação de Pagamento:
    Pergunte ao usuário se ele tem saldo na conta (booleano). Se tiver, pergunte se ele deseja fazer uma compra. Se a resposta for afirmativa, peça ao usuário para inserir o valor da compra (float). Verifique se o valor da compra é menor ou igual ao saldo disponível e informe se a transação foi concluída com sucesso ou se o saldo é insuficiente.
    */    

    $tem_saldo= true;
 
   if($tem_saldo){
    $fazer_compra=true;
    if($fazer_compra) {
        $saldo_disponivel= 500.0;
        $valor_compra= 350.0;
        if($valor_compra <= $saldo_disponivel) {
            echo "Transação concluída com sucesso. <br>";
        } else {
            echo "Saldo insuficiente para essa compra. <br>";
        }
    } else {
        echo "Não deseja comprar";
    }
    } else {
    echo "Não tem saldo";
   }


   /* Exercício 3 - Conversor de Temperatura:
    Solicite ao usuário que insira uma temperatura em Celsius (float). Converta essa temperatura para Fahrenheit usando a fórmula: Fahrenheit = (Celsius * 9/5) + 32. Exiba o resultado da conversão.
*/

    $temp_celsius = 30.0;
    $calculo_temperatura = ($temp_celsius * 9/5) + 32;
    echo "A temperatura $calculo_temperatura º em Farenheit é: $calculo_temperatura"; 

   /* Exercício 4 - Verificação de Acesso:
    Pergunte ao usuário se ele é maior de idade (booleano). Se ele for maior de idade, pergunte se ele possui autorização dos pais (booleano). Com base nas respostas, determine se o usuário tem acesso ao conteúdo restrito.
  */

  $autorizacao = true;
  $maior_de_idade= true; 
  
  if ($maior_idade ||$autorizacao){
    echo "Acesso concedido ao conteúdo restrito. <br>";
  } else {
    echo "Acesso negado ao conteúdo restrito. <br>";
  }

   /* Exercício 5 - Verificação de Números Primos:
    Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. Use um booleano para indicar se o número é primo ou não.
*/

?>