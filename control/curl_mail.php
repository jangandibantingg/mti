<?php
  function send_email($email,$subject,$content){
  $config = array();
  $config['api_key'] = "d15a6a52f90d35afd87990390e730cfe";
  $config['secreet_key'] = "93db1c2db098725f72b380a9f848bff8";
  $config['domain'] = "https://www.codercoffee.id/";
  $config['api_url'] = "https://api.mailjet.com/v3.1/send";
  $message = array();
  $message['from'] = "your domain <noreplay@your-domain.com>";
  $message['to'] =$email;
  //$message['h:Reply-To'] = "&lt;info@domain.com&gt;";
  $message['subject'] =$subject;
  $message['html'] =$content;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $config['api_url']);
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($ch, CURLOPT_USERPWD, "".$config['api_key']."");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$message);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
  var_dump($result);
}

echo send_email("thecodercoffeebar@gmail.com","helo","hay");
// api key d15a6a52f90d35afd87990390e730cfe
// screet key  93db1c2db098725f72b380a9f848bff8

?>
