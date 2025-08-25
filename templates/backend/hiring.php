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
        $resume = $_POST['resume'] ?? '';
        $first_name  = $_POST['first_name'] ?? '';
        $last_name   = $_POST['last_name'] ?? '';
        $email       = $_POST['email'] ?? '';
        $phone       = $_POST['phone'] ?? '';
        $position = $_POST['position'] ?? '';

        // Setting Email Recipients
        $mail->setFrom($mail->Username, "Bluff Creek Electric LLC");
        $mail->addAddress($mail->Username, "Bluff Creek Electric LLC");

        // Content
        $mail->isHTML(true);
        $mail->Subject = "New Hire for $position";
        $mail->Body    = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nPhone: $phone\n";

        // Attaching resume
        $mail->addAttachment(
            $_FILES['resume']['tmp_name'],
            $_FILES['resume']['name']

        );

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
        $mail->Subject = "Bluff Creek Electric LLC";
        $mail->Body    = "Thank you for contacting Bluff Creek Electric Team, We will contact you soon";

        $mail->send();

    }
    
    
?>