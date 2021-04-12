<?php
        

        include "config.php";
        $firstName = $_POST['FirstName'];
        $phone = $_POST['Phone'];   
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $wage = $_POST['wage'];
        $obs = $_POST['obs'];
        
        
        
        
        if(isset($_POST['FirstName']) && ($_POST['Phone'])){
           
                $to      = 'julimzikapokemao@gmail.com';
                $subject = 'JK ASSESSORIA - Nova ficha';
                
                
                $message = "<h1>Nova Solicitação</h1>
                            <hr>
                            <br>
                            <b>Nome :</b> $firstName <br>".
                            "<b>Celular(Whatsapp) : </b>$phone <br>".
                            "<b>CPF</b>: $cpf <br>".
                            "<b>Email : </b>$email <br>".
                            "<b>Renda mensal : </b>$wage<br>".
                            "<b>Observações : </b>$obs <br>";
                            
                            
                            
                            $headers =  'From: solicitacao@jkassessoria.com' . "\r\n" .
                            'Reply-To: test@yourdomain.com' . "\r\n" .
                            "Content-type:text/html;charset=UTF-8" . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers);
 

            
               
        }
        $sql = "INSERT INTO people_info(firstname,phone,cpf,email,wage,obs) VALUES ('$firstName','$phone','$cpf','$email','$wage','$obs')";

        

        if($con->query($sql))
        {
            echo 'sucess';
            
        }
?>
