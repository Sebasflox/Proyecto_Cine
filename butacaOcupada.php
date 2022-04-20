<?php 

        $Lista = $_POST['Lista'];
        $Titulo = $_POST['Titulo'];
        $Horario = $_POST['Horario'];
        $Sala = $_POST['Sala'];
        $Asiento = 0;
        $Precio = $_POST['Precio'];

        require 'Model/Conexion.php';

        $con = new clsConexion;
        $db = $con->conexion();

        foreach ($Lista as $key => $value) {
            $sql = ("UPDATE asientos_disponibles SET Estado= 0 WHERE 
            Titulo = '".$Titulo."' AND Asiento = '".$value."' AND Sala = '".$Sala."' AND Horario = '".$Horario."' ");
            $Asiento++;
            $stmt = $db-> query($sql);  }

            $Total = $Asiento*$Precio;
            $sql = 'INSERT INTO factura(Nombre, Titulo, Asiento, Total) 
            VALUES
             ("Juan","'.$Titulo.'","'.$Asiento.'","'.$Total.'")';

            $stmt = $db->query($sql);

            
            

      $db -> close();

      function sendemail($mail_username,$mail_userpassword,$mail_setFromEmail,$mail_setFromName,$mail_addAddress,$txt_message,$mail_subject){
            require 'plugins/mail/src/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $mail->isSMTP();                            // Establecer el correo electrónico para utilizar SMTP
            $mail->Host = 'smtp.gmail.com';             // Especificar el servidor de correo a utilizar 
            $mail->SMTPAuth = true;                     // Habilitar la autenticacion con SMTP
            $mail->Username = $mail_username;          // Correo electronico saliente ejemplo: tucorreo@gmail.com
            $mail->Password = $mail_userpassword;         // Tu contraseña de gmail
            $mail->SMTPSecure = 'tls';                  // Habilitar encriptacion, ssl es aceptada
            $mail->Port = 587;                          // Puerto TCP  para conectarse 
            $mail->setFrom($mail_setFromEmail, $mail_setFromName);
            $mail->addReplyTo($mail_setFromEmail, $mail_setFromName);
            $mail->addAddress($mail_addAddress);   // Agregar quien recibe el e-mail enviado
            $message = file_get_contents();
            $message = str_replace('{{first_name}}', $mail_setFromName, $message);
            $message = str_replace('{{message}}', $txt_message, $message);
            $message = str_replace('{{customer_email}}', $mail_setFromEmail, $message);
            $mail->isHTML(true);  // Establecer el formato de correo electrónico en HTML
        
            $mail->Subject = $mail_subject;
            $mail->msgHTML($message);
            if(!$mail->send()) {
                echo '<p style="color:red">No se pudo enviar el mensaje..';
                echo 'Error de correo: ' . $mail->ErrorInfo;
                echo "</p>";
            } else {
                echo '<p style="color:green">Tu mensaje ha sido enviado!</p>';
            }
        }


                // Configuracion de variables para enviar el correo/
                $mail_username="sb7gabriel@gmail.com";//Correo electronico saliente ejemplo: tucorreo@gmail.com
                $mail_userpassword="14pm3s4dn1l";//Tu contraseña de gmail
                $mail_addAddress="keylorjavabedrock@gmail.com";//correo electronico que recibira el mensaje
                // $template="email_template.html";//Ruta de la plantilla HTML para enviar nuestro mensaje

                //Inicio captura de datos enviados por $_POST para enviar el correo/
                $mail_setFromEmail='keylorjavabedrock@gmail.com';
                $mail_setFromName='Gabriel';
                $txt_message='Hola';
                $mail_subject='Compra';

                sendemail($mail_username,$mail_userpassword,$mail_setFromEmail,$mail_setFromName,$mail_addAddress,$txt_message,$mail_subject);//Enviar el mensaje
      
?>