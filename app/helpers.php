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
function dateFormat($date,$format){
    $seconds= strtotime($date);
    return date($format,$seconds);
}
class Privacy{
    const PRIV_FRIENDS='friends';
    const PRIV_PUBLIC='public';
    const PRIV_CONNECTIONS='connections';
    const PRIV_TIER_1='tier-1';
    const PRIV_TIER_2='tier-2';
}
function getPrivacyDetails($slug){
    $data=[];
    if ($slug=='friends') {
        $data['url'] = url('ambassador_assets/images/icons/users.svg');
        $data['name'] = 'Friends';
    }
    if ($slug=='public') {
        $data['url'] = url('ambassador_assets/images/icons/globe.svg');
        $data['name'] = 'Public';
    }
    if ($slug=='connections') {
        $data['url'] = url('ambassador_assets/images/icons/connection.svg');
        $data['name'] = 'Connections';
    }
    if ($slug=='tier-1') {
        $data['url'] = url('ambassador_assets/images/icons/personal-network.svg');
        $data['name'] = 'Personal Tier 01';
    }
    if ($slug=='tier-2') {
        $data['url'] = url('ambassador_assets/images/icons/extended-network.svg');
        $data['name'] = 'Extended Tier 02';
    }
    return $data;
}

function myLikeOnPost($post){
    $my=false;
    foreach ($post->likes as $like){
        if ($like->user_id==auth()->user()->id){
            $my=true;
        }
    }
    return $my;
}
function getSocialPrivacy($k){
    $data=unserialize(auth()->user()->details->privacy);
    $privacy='friends';
    if ($data){
        foreach ($data as $key=>$value){
            if ($key==$k){
                $privacy=$value;
            }
        }
    }

    return $privacy;
}
