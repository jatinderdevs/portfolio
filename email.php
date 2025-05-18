<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require './src/PHPMailer.php';
require './src/SMTP.php';
require './src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

   

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                      // Use SMTP
        $mail->Host = 'mail.jatinderdev.com';                // Your domain’s mail server (replace with your domain)
        $mail->SMTPAuth = true;                              // Enable SMTP authentication
        $mail->Username = 'info@jatinderdev.com';            // Your cPanel email
        $mail->Password = 'Bigpanda@994';
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
        
        //  // Acknowledgment email to client
        // $mail->clearAllRecipients(); // Clear previous recipients
        // $mail->addAddress($email, $name); // Client’s email
        // $mail->setFrom('admin@yarramovers.com.au', 'Yarramovers');
        // $mail->addReplyTo('info@yarramovers.com.au', 'Yarramovers');// Reply-to Yarramovers Team
        // $mail->Subject = 'Thank You for Your Quote Request | Yarramovers';
        // $mail->isHTML(true);
        // $mail->Body = "
        //     <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;'>
        //         <h2 style='color: #28a745;'>Thank You, $name!</h2>
        //         <p>We have received your quote request at Yarramovers. One of our team member will review your details and get back to you soon with a personalized quote.</p>
        //         <p><strong>Request Summary:</strong></p>
        //         <ul>
        //             <li><strong>Name:</strong> $name</li>
        //             <li><strong>Items:</strong> $items_list</li>
        //         </ul>
        //         <p>Need to update your request? Reply to this email or visit <a href='https://www.yarramovers.com.au/index.php#query'>our Query Form</a>.</p>
        //         <p>Happy moving!</p>
        //         <p>The Yarramovers Team</p>
        //     </div>
        // ";

        // $mail->send();

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