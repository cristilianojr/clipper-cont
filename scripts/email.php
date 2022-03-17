<?php 

    if (isset($_POST['email']) && !empty($_POST['email'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $to = "contato@clippercont.com";
        $subjet = "Contato - Clipper Contabilidade";
        $body = "Nome: ".$name."\r\n".
                "Email: ".$email."\r\n".
                "Mensagem: ".$message;
        $header = "From:".$email."\r\n".
                    "Reply-To:".$email."\r\n".
                    "X=Mailer:PHP/".phpversion();
        
        mail($to, $subjet, $body, $header);

    }
                
?>