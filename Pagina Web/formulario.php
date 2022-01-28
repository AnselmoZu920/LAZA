<?php
if (isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['tel']) && !empty($_POST['msj'])){
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $tel = $_POST['tel'];
        $msj = $_POST['msj'];
        $header = "From: noreply@example.com" . "\r\n";
        $header = "X-Mailer: PHP/". phpversion();
        $email = email($mail,$name,$tel,$msj,$header);
        if($email){
            echo "<h4> ¡Mail enviado exitosamente! </h4>";
        }
    }
}
?>