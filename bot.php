<?php
    $bottoken = "1339993162:AAECH5akWOzL2sQD3kHLjZSONpq_DCJBSiM";
    $website = "https://api.telegram.org/bot".$bottoken;
    $update = file_get_contents("php//input");
    $update = json_decode($update,TRUE);
    $chatId = $update["message"]["chat"]["id"];
    $chatType = $update["message"]["chat"]["type"];
    $message = $update["message"]["text"];
    switch($message){
        case "/ayuda":
            $response = "Gracias por pedir ayuda c:, lo que necesitas para conocer en que te puedo ayudar es escribir '/' y saldran una 
            serie de acciones que puedo realizar, si estas listo comencemos c:";
            sendMenssage($chatId, $response);
            break;
        default:
            break;
    }
    function sendMenssage($chatId, $response){
        $url = $GLOBALS[website]."/senMenssage?chat_id=".$chatId."&parse_modeHTML&text=".urlencode($response);
        file_get_contents($url);

    }
?>