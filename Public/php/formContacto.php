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

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $headers = "From: $correo";
        $headers = "From: " . $correo . "\r\n";
        $headers .= "Reply-To: ". "richtipolibre@gmail.com" . "\r\n";
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
?>