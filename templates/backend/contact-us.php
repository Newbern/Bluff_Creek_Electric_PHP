<?php 
    include("Gmail.php");

    if ($_SERVER["REQUEST_METHOD"] === "POST")
        {   
            // Anti-bot check
            if (!empty($_POST['company'])) {
                // If the hidden field is filled out, it's likely a bot submission. Do not process the form.
                http_response_code(200);
                exit;
            }

            // Sending to (Bluff Creek Eletric LLC)
            // Getting Name Values
            $first_name  = $_POST['first_name'] ?? '';
            $last_name   = $_POST['last_name'] ?? '';
            $email       = $_POST['email'] ?? '';
            $phone       = $_POST['phone'] ?? '';
            $description = $_POST['description'] ?? '';

            // Setting Email Recipients
            $mail->setFrom($mail->Username, "Bluff Creek Electric LLC");
            $mail->addAddress($mail->Username, "Bluff Creek Electric LLC");

            // Content
            $mail->isHTML(true);
            $mail->Subject = "New Client $first_name $last_name";
            $mail->Body    = "First Name: $first_name<br>Last Name: $last_name<br>Email: $email<br>Phone: $phone<br><br>Description: $description";
            
            // Sending Mail
            $mail->send();
            
            // Clearing mail object
            $mail->clearAddresses();
            $mail->clearBCCs();
            $mail->clearCCs();

            // Setting Client's Email Recipients
            $mail->setFrom($mail->Username, "Bluff Creek Electric LLC");
            $mail->addAddress($email, "$first_name $last_name");

            // Content
            $mail->isHTML(true);
            $mail->Subject = "Bluff Creek Electric";
            $mail->Body    = "Thank you for contacting Bluff Creek Electric Team, we will get a hold of you when we can";

            $mail->send();

        }


?>