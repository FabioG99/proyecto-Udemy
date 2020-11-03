 <?php
    // a donde ira el email
    $para = 'fabioandresgv8@gmail.com';

    $asunto = "Mensaje  desde jotajotavm.com";

    $mailheader = "From: ".$_POST["email"]."\r\n";
    $mailheader .= "Replay-To: ".$_POST["email"]."\r\n";
    $mailheader .= "Content-type: text/html; charset=utf-8\r\n";
    // ES EL CONTENIDO QUE VA CONTENER EL EMAIL
    $MESSAGE_BODY = "Nombre: ".$_POST["name"]."\n";
    $MESSAGE_BODY .= "\n<br>Email: ".$_POST["email"]."\n";
    $MESSAGE_BODY .= "\n<br>Mensaje: ".n12br($_POST["message"])."\n";


    // ejecutaremos un comando, el email
    mail ($para, $asunto, $MESSAGE_BODY, $mailheader) or die ("Error al enviar el Email");
    header  ('location: http://jotajotavm.com/fabio')

?>