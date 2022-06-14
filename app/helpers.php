<?php
use \PHPMailer\PHPMailer\PHPMailer;
function sendEmail($to,$from,$subject,$message){
    if ($from==null){
        $from='connectsocial@napollo.net';
    }
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';             //  smtp host
        $mail->SMTPAuth = true;
        $mail->Username = 'connectsocial@napollo.net';   //  sender username
        $mail->Password = 'SDE$#@W#42';       // sender password
        $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
        $mail->Port = 587;                          // port - 587/465

        $mail->setFrom($from, 'Connect social');
        $mail->addAddress($to);
        //$mail->addCC();
        //$mail->addBCC($request->emailBcc);
        //$mail->addReplyTo('sender@example.com', 'SenderReplyName');

        $mail->isHTML(true);                // Set email content format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        // $mail->AltBody = plain text version of email body;
        if($mail->send() ) {
            return true;
        }
        else {
            return response()->json(["failed", $mail->ErrorInfo]);
        }
    } catch (Exception $e) {
        return response()->json(["error", "Message could not be sent."]);
    }
}