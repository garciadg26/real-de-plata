<?php 

    $nombre = $_POST["nombre"] ?? '';
    $correo = $_POST["correo"] ?? '';
    $telefono = $_POST["telefono"] ?? '';
    $mensaje = $_POST["mensaje"] ?? '';

        $respuesta = [];
        echo json_encode($respuesta);

        //ENVIAMOS EL FORMULARIO
        echo('DATOS ENVIADOS CON EXITO: ' . $nombre . $correo . $telefono . $mensaje);


        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $asunto = 'Nuevo mensaje de contacto'; 
        $mensaje = $_POST["mensaje"];

        $cabecera = '
        <html>
        <head>
          <title>Hotel Mesón Real de Plata</title>
        </head>
        <body>
          <img src="https://tiposlibres.com/test/real-de-plata/Public/images/Hotel-real-de-plata-body-contacto.jpg" width="100%" height="auto">
        </body>
        </html>
        ';
        // GOOGLE reCAPTCHA
        $recaptcha = $_POST['g-recaptcha-response'];
        $secret = "6LdFFaskAAAAAJC-d815bNDwJeRVz_WHKQygZS4v";

        // VALIDAMOS LA VERIFICACIÓN DEL reCAPTCHA
        if(!$recaptcha){
            echo "Por favor verifica el captcha";
        } else{
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha");
            var_dump($response);
            $array = json_decode($response, true);
            if($array["success"]){
                echo "<h2>Gracias</h2>";

                // Para enviar un correo HTML, debe establecerse la cabecera Content-type
                $headers = "From: $correo";
                $headers = "From: " . $correo . "\r\n";
                $headers .= "Reply-To: ". $correo . "\r\n";
                $headers .= "Bcc: garcia_richgraphic@hotmail.com \r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=utf-8\r\n";
                //$cabeceras .= 'From: <'.$email_from.'>' . "\r\n";
        
                $email_from = $correo;
        
                // Varios destinatarios
                $email_to = 'ricardo@tiposlibres.com';
                // $email_to = 'contacto@sophie.travel, alan@tiposlibres.com';
                /*$para  = 'graphicrichart@gmail.com' . ', '; // atención a la coma
                $para .= 'garcia_richgraphic@hotmail.com';*/
                
        
        
                $body = $cabecera . "\n\n" . 'Nombre: ' . $nombre . "\n\n" . '<br>Email: ' . $correo . "\n\n" . '<br>Teléfono: ' . $telefono . "\n\n" . '<br>Asunto: ' . $asunto . "\n\n" . '<br>Mensaje: ' . $mensaje . "\n\n";
        
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