<?php 

    $fechaLlegada = $_POST["fechaLlegada"] ?? '';
    $telefono = $_POST["telefono"] ?? '';
    $numPersonas = $_POST["numPersonas"] ?? '';
    $motivoVisita = $_POST["motivoVisita"] ?? '';
    $visita = 'Evento';

    //ENVIAMOS EL FORMULARIO
    echo('DATOS ENVIADOS CON EXITO: ' . $fechaLlegada . $telefono . $numPersonas . $motivoVisita);

    $asunto = 'Nueva reservación';
    $cabecera = '
        <html>
        <head>
          <title>Real de plata</title>
        </head>
        <body>
          <img src="https://mesonrealdeplata.com/Public/images/Hotel-real-de-plata-body-reservar.jpg" width="100%" height="auto">
          <br>
        </body>
        </html>
        ';

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
        


        $body = $cabecera . "\n\n" . 'Asunto: ' . $visita . "\n\n" . 'Teléfono: ' . $telefono . "\n\n" . '<br>Fecha de llegada: ' . $fechaLlegada . "\n\n" . '<br>Número de personas: ' . $numPersonas . "\n\n" . '<br>Motivo de visita: ' . $motivoVisita . "\n\n";

        $success = @mail($email_to, $asunto, $body, $headers);
        echo "Correo enviado";
        echo json_encode($status);
        die;
        //FIN DEL FORMULARIO
?>