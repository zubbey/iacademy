<?php
function autoReply($email, $fname, $lname, $course){
    $to = 'registration@ibrandacademy.one, '. $email;
    $subject = 'iBrand Academy Enrollment System';
    $from = 'no-reply@ibrandacademy.one';

// To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
    $admin = "com.zubbey@hotmail.com, ernest.nnadi@gmail.com, info@ibrandacademy.one";
    $headers .= 'From: '.$from."\r\n".
        'Reply-To: '.$from."\r\n" .
        'CC: '.$admin."\r\n" .
        'X-Mailer: PHP/' . phpversion();

// Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<div style="text-align: center; width: 100%; margin: auto; padding: 15px">';
    $message .= '<img id="logo" style="" src="ibrand.one/iacademy/img/iacademy_logo.png" width="127.76" height="48.73" alt="iAcademy logo">';
    $message .= '</div>';
    $message .= '<h2 style="text-align: center">Hey '.$fname.' '.$lname.', </h2>';
    $message .= '<p>Congratulation on your registration, We are happy to guide you on the journey of '.$course.' <br>For more info kindly send us a mail at registration@ibrandacademy.one or call our hotline. <br><span style="color: #00aabd; font-size: small; font-style: italic;">+234(080) 212-60000
| +234(080) 374-78593</span></p>
';
    $message .= '</body></html>';

// Sending email
    mail($to, $subject, $message, $headers);
}
?>