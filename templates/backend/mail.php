<?php
function sendClientEmail($first_name, $last_name, $email, $phone, $description) {
    $to = "StevencNewbern@gmail.com";
    $subject = "New Client";
    $message = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nPhone: $phone\n\nDescription: $description";
    $headers = "From: StevencNewbern@gmail.com";

    // Send to business
    mail($to, $subject, $message, $headers);

    // Send to client
    $client_message = "Thank you for contacting Bluff Creek Electric Team, we will get a hold of you when we can";
    mail($email, "Bluff Creek Electric", $client_message, $headers);
};

$sent = mail($to, $subject, $message, $headers);
if ($sent) {
    echo "Mail successfully sent.";
} else {
    echo "Mail sending failed.";
}

?>