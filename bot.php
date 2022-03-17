<?php
    date_default_timezone_set("Asia/kolkata");
    //Data From Webhook
    $content = file_get_contents("php://input");
    $update = json_decode($content, true);
    $chat_id = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];
    $message_id = $update["message"]["message_id"];
    $id = $update["message"]["from"]["id"];
    $username = $update["message"]["from"]["username"];
    $firstname = $update["message"]["from"]["first_name"];
    $start_msg = $_ENV['START_MSG']; 

if($message == "/start"){
    send_message($chat_id,$message_id, "***Hola $firstname \nUsa .bin xxxxxx Para Checkar Tu BIN \n$start_msg***");
}

//Bin Lookup
if(strpos($message, ".bin") === 0)
$result = inicio(@result);{
Metemos la cc desde donde iniciara el conteo

inicio = (input("Ingresa el numero de inicio: ")) 

while len(inicio) != 6:                # Contabilizamos los caracteres de nuestro inicio
    inicio += "0"                       # para añadir los digitos restantes como ceros
 
inicio = int(inicio)                    # Convertimos nuestre inicio de cadena a entero para poder sumarlo

print("Inicio establecido como", inicio)

# Metemos el limite de la cc donde acaba el conteo

limite = (input("Ingrese su limite: ")) # Establecemos 

while len(limite) != 6:                # En esta parte contabilizamos los caracteres que tiene nuestro limite
    limite += "0"                       # Para añadirle ceros restantes

limite = int(limite)                    # Convertimos el digito del limite mas lo ceros que agregamos anteriormente de 
                                        # texto o cadena a enteros para poder ir sumando 

print("El limite ha sido establecido como:", limite)

while inicio <= limite:                                        
    print(".bin", inicio)
    inicio += 1               
                                       
    if ($result1 == true) {
    send_message($chat_id,$message_id,"***VALID BIN✅
.bin
〄  Checked By: @$username ***");
    }
else {
    send_message($chat_id,$message_id, "***Oye negro, métete tu bin por el culo no me sirve❌***");
}
}
    function send_message($chat_id,$message_id, $message){
        $text = urlencode($message);
        $apiToken = $_ENV['API_TOKEN'];  
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&reply_to_message_id=$message_id&text=$text&parse_mode=Markdown");
    }
?>
