<?php

$name = strip_tags(@$_POST['con_name']);
$email = strip_tags(@$_POST['con_email']);
$message = strip_tags(@$_POST['con_message']);

if ($name && $email && $message)
{
    $to = 'Waister Nunes <waisters@gmail.com>';
    $subject = 'Novo contato via portfolio';

    $headers = "From: Waister Portfolio<noreply@appfolio.me>\r\n";
    $headers .= "Reply-To: " . $name . "<" . $email . ">\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $body .= '<b>Nome:</b> ' . $name . '<br>';
    $body .= '<b>Email:</b> ' . $email . '<br>';
    $body .= '<b>Mensagem:</b> ' . nl2br($message) . '<br>';

    $status = @mail($to, $subject, $body, $headers);

    if ($status)
    {
        echo 'success';
    }
    else
    {
        echo 'error_send';
    }
}
else
{
    echo 'error_validation';
}
