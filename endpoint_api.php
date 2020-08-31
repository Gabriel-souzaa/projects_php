<?php
    function InsertDices() {

        include_once('connect.php');

        //Função que aceita o parametro URLpara qual requisição vai ser enviada (cria o cURL);
        $ch = curl_init();

        //Função para informar diversos parametros ao mesmo tempo e passando um array de opções;
        curl_setopt_array($ch, [
        
            //Envia a requisição
            CURLOPT_URL => 'https://api-dev.leroymerlin.com.br/v1/marketplace/products/imports/:import/transformation_error_report',

            //Header da requisição
            CURLOPT_HTTPHEADER => [
                'ApiKey: 2AAc5RaJg4FGefDEditJxyWXei5jB7o41231',
                'Content-Type: application/json',
            ],

            //Retorna como string
            CURLOPT_RETURNTRANSFER => true,

            //Define o protocolo da requisição
            CURLOPT_PROTOCOLS => CURLPROTO_HTTPS
        ]);
        
        //Assim que a requisição estiver configuradaz, utilizar a função abaixo para executar (evia e salva a resposta);
        
        echo $resultado = curl_exec($ch); // somente para exibir o json na tela;

        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE); //Pegando a status de respota da api

        include('insert_dice.php');

        //Assim que a requisção for utilizada, utilizar função abaixo, que fecha a requisição e limpa a memoria;
        curl_close($ch);
    };

    InsertDices();
?>
