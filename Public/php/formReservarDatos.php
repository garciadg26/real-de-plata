<?php 

    $fechaLlegada = $_POST["fechaLlegada"] ?? '';
    $fechaSalida = $_POST["fechaSalida"] ?? '';
    $numeroPersonas = $_POST["numPersonas"] ?? '';
    $selectMotivo = 'Evento';
    $nombre = $_POST["nombre"] ?? '';
    $telefono = $_POST["telefono"] ?? '';
    $mensaje = $_POST["mensaje"] ?? '';

        $respuesta = [];
        echo json_encode($respuesta);

        //ENVIAMOS EL FORMULARIO
        echo('DATOS ENVIADOS CON EXITO: ' . $nombre . $correo . $telefono . $mensaje);

        $fechaLlegada = $_POST["fechaLlegada"];
        $fechaSalida = $_POST["fechaSalida"];
        $numeroPersonas = $_POST["numPersonas"];
        $selectMotivo = $_POST["selectMotivo"];
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $mensaje = $_POST["mensaje"];

        $cabecera = '
        <html>
        <head>
          <title>Sophie Travel Agencia de viajes</title>
        </head>
        <body>
          <img src="https://mesonrealdeplata.com/Public/images/Hotel-real-de-plata-body-reservar.jpg" width="100%" height="auto">
        </body>
        </html>
        ';

        // GOOGLE reCAPTCHA
        $recaptcha = $_POST['g-recaptcha-response'];
        $secret = "6LdFFaskAAAAAJC-d815bNDwJeRVz_WHKQygZS4v";

        if(!$recaptcha){
            echo "Por favor verifica el captcha";
        } else{
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha");
            var_dump($response);
            $array = json_decode($response, true);

            if($array["success"]){
                echo "<h2>Gracias</h2>";

                // Para enviar un correo HTML, debe establecerse la cabecera Content-type
                $headers = "From: Nueva reservación";
                $headers = "From: " . "contacto@mesonrealdeplata.com" . "\r\n";
                $headers .= "Reply-To: ". "contacto@mesonrealdeplata.com" . "\r\n";
                $headers .= "Bcc: richtipolibre@gmail.com \r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=utf-8\r\n";
                //$cabeceras .= 'From: <'.$email_from.'>' . "\r\n";

                $email_from = "";

                // Varios destinatarios
                $email_to = 'contacto@mesonrealdeplata.com, ricardo@tiposlibres.com';


                $body = $cabecera . "\n\n" . "\n\n" . 'Nombre: ' . $nombre . "\n\n" . '<br>Teléfono: ' . $telefono . "\n\n" . '<br>Fecha de llegada: ' . $fechaLlegada . "\n\n" . '<br>Fecha de salida: ' . $fechaSalida . "\n\n" . '<br>Número de personas: ' . $numeroPersonas  . "\n\n" . '<br>Motivo del viaje: ' . $selectMotivo . '<br>Mensaje: ' . $mensaje . "\n\n";

                $success = @mail($email_to, $asunto, $body, $headers);
                echo "Correo enviado";
                echo json_encode($status);
                //die;
                //FIN DEL FORMULARIO
            } else {
                echo "Error al comprobar el reCaptcha";
            }
        }
?>