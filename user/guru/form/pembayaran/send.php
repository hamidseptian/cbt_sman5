    <?php
    require_once "PHPMailer/PHPMailerAutoload.php";

    $mail = new PHPMailer;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.penting.web.id';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'coba@penting.web.id';                 // SMTP username
    $mail->Password = 'rahasia';                           // SMTP password
    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                

    $mail->setFrom('coba@penting.web.id', 'Coba');
    $mail->addAddress('cpanel@penerima.com', 'Panel Ku');

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Judulku ke 2 ya';
    $mail->Body    = 'Ini menggunakan HTML <b>ini tebal!</b>';

    if(!$mail->send())
    {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else
    {
        echo 'Message has been sent';
    }
    ?>
