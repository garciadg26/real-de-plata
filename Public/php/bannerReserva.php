<?php 

    $fechaLlegada = $_POST["fechaLlegada"] ?? '';
    $telefono = $_POST["telefono"] ?? '';
    $numPersonas = $_POST["numPersonas"] ?? '';
    $motivoVisita = $_POST["selectMotivo"] ?? '';

    //ENVIAMOS EL FORMULARIO
    echo('DATOS ENVIADOS CON EXITO: ' . $fechaLlegada . $telefono . $numPersonas . $motivoVisita);

    $asunto = 'Nueva reservación';
    $cabecera = '
        <html>
        <head>
          <title>Real de plata</title>
        </head>
        <body>
          <img src="https://tiposlibres.com/test/real-de-plata/Public/images/Hotel-real-de-plata-body-contacto.jpg" width="100%" height="auto">
        </body>
        </html>
        ';

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $headers = "From: Nueva reservación";
        $headers = "From: " . "" . "\r\n";
        $headers .= "Reply-To: ". "" . "\r\n";
        $headers .= "Bcc: richtipolibre@gmail.com \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";
        //$cabeceras .= 'From: <'.$email_from.'>' . "\r\n";

        $email_from = "";

        // Varios destinatarios
        $email_to = 'ricardo@tiposlibres.com';
        // $email_to = 'ricardo@tiposlibres.com, alan@tiposlibres.com';
        /*$para  = 'graphicrichart@gmail.com' . ', '; // atención a la coma
        $para .= 'garcia_richgraphic@hotmail.com';*/
        


        $body = $cabecera . "\n\n" . 'Teléfono: ' . $telefono . "\n\n" . '<br>Fecha de llegada: ' . $fechaLlegada . "\n\n" . '<br>Número de personas: ' . $numPersonas . "\n\n" . '<br>Motivo de visita: ' . $motivoVisita . "\n\n";

        $success = @mail($email_to, $asunto, $body, $headers);
        echo "Correo enviado";
        echo json_encode($status);
        die;
        //FIN DEL FORMULARIO
?>