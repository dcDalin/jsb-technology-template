<?php 

    // include phpmailer class
	require_once 'mailer/class.phpmailer.php';
	// creates object
    $mail = new PHPMailer(true);
    

    //if(filter_has_var(INPUT_POST, 'btn-send-email')){
        try {
            $name = 'the name';
            $customerEmail = 'the@email.com';
            $message = 'this is a long ass message';
            
            $email = 'mcdalinoluoch@gmail.com';
            $subject = $name.','.$customerEmail;

            $response = array();

            try
			{
				$mail->IsSMTP(); 
				$mail->isHTML(true);
				$mail->SMTPDebug  = 0;                     
				$mail->SMTPAuth   = true;                  
				$mail->SMTPSecure = "ssl";                 
				$mail->Host       = "smtp.gmail.com";      
				$mail->Port       = 465;             
				$mail->AddAddress($email);
				$mail->Username   ="mcdalinoluoch@gmail.com";  
				$mail->Password   ="dalomallo401h8*";            
				$mail->SetFrom('mcdalinoluoch@gmail.com','Coding Cage');
				$mail->AddReplyTo("mcdalinoluoch@gmail.com","Coding Cage");
				$mail->Subject    = $subject;
				$mail->Body 	  = $message;
				$mail->AltBody    = $message;
					
				if($mail->Send())
				{
                    $response['status'] = 'success'; // Email sent successfully
                    $response['message'] = 'Success, we have received your email';					
				}else{
                    $response['status'] = 'error'; // Email not sent
                    $response['message'] = 'Sorry, email not sent';
                }
                echo json_encode($response);
                exit; 
			}
			catch(phpmailerException $ex)
			{
				$response['status'] = 'error'; // Email not sent
                $response['message'] = 'Sorry, email not sent';
			}
        }catch(Exception $e){
            echo $e;
        }
    //}
    /* End ajax login process */
?>
