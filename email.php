<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



// Include PHPMailer files
require './src/PHPMailer.php';
require './src/SMTP.php';
require './src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
   $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

    // Verify reCAPTCHA
    $secretKey = 'secert key'; // Replace with your Secret Key
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $verifyData = [
        'secret' => $secretKey,
        'response' => $recaptchaResponse,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($verifyData)
        ]
    ];
    $context = stream_context_create($options);
    $verifyResult = file_get_contents($verifyUrl, false, $context);
    $captchaSuccess = json_decode($verifyResult);

    if (!$captchaSuccess->success) {
        header("Location: contact.php?status=error&message=" . urlencode("reCAPTCHA verification failed."));
        exit();
    }
//    cpatcha end

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                      // Use SMTP
        $mail->Host = 'mail.jatinderdev.com';                // Your domain’s mail server (replace with your domain)
        $mail->SMTPAuth = true;                              // Enable SMTP authentication
        $mail->Username = 'info@jatinderdev.com';            // Your cPanel email
        $mail->Password = 'password email';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL             // Your cPanel email password
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Use TLS
        $mail->Port = 465;                                   // Port for TLS

        // Recipients
        $mail->setFrom('info@jatinderdev.com', 'JatinderDev'); // Sender (cPanel email)
        $mail->addAddress('jssingh134@gmail.com');  // Your personal email  request email to this email
        $mail->addReplyTo($email, $name);                     // Reply-to customer’s email

        // Content
        $mail->isHTML(false);                                 // Plain text email
        $mail->Subject = 'New Query from JatinderDev Website';
        $mail->Body = "New query from JatinderDev website:\n\n" .
                      "Name: $name\n" .
                      "Email: $email\n" .
                      "Phone: $phone\n" .
                      "Message: $message\n";
                      

        // Send email
        $mail->send();
        
         // Acknowledgment email to client
        $mail->clearAllRecipients(); // Clear previous recipients
        $mail->addAddress($email, $name); // Client’s email
        $mail->setFrom('info@jatinderdev.com', 'JatinderDev');
        $mail->addReplyTo('jssingh134@gmail.com', 'JatinderDev');// Reply-to JatinderDev Team
        $mail->Subject = 'Thank You for Your Quote Request | JatinderDev';
        $mail->isHTML(true);
        $mail->Body = "
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;'>
                <h2 style='color: #28a745;'>Thank You, $name!</h2>
                <p>We have received your request at JatinderDev. We will review your details and get back to you soon with a personalized quote.</p>
                <p><strong>Request Summary:</strong></p>
                <ul>
                    <li><strong>Name:$name</strong> $name</li>
                    <li><strong>Message:$message</strong> $items_list</li>
                </ul>
                <p>Need to update your request? Reply to this email or visit <a href='https://www.JatinderDev.com/contact-us.php'>Contact Page</a>.</p>
        
                <p>JatinderDev</p>
        
            </div>
        ";

        $mail->send();

        header("Location: index.php?status=success");
        exit();
       

    } catch (Exception $e) {
        echo urlencode("Mail could not be sent. Error: {$mail->ErrorInfo}");
        //header("Location: contact.php?status=error&message=" . urlencode("Mail could not be sent. Error: {$mail->ErrorInfo}"));
        exit();
    }
} else {
    echo "Invalid request.";
}
?>