<?php
// phpmailer version 6.0.1
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$mail= new PHPMailer();                          //建立新物件
$mail->isSMTP();
$mail->SMTPDebug = 2;                                    //設定使用SMTP方式寄信
$mail->SMTPAuth = true;                        //設定SMTP需要驗證
$mail->SMTPSecure = "ssl";                    // Gmail的SMTP主機需要使用SSL連線
$mail->SMTPOptions = array(
   'ssl' => array(
     'verify_peer' => false,          //是否需要驗證SSL證書。默認值為FALSE
     'verify_peer_name' => false,        //需要驗證對等名稱.默認值為 TRUE.
     'allow_self_signed' => true             // 是否允許自簽名證書。需要配合 verify_peer 參數使用（注：當 verify_peer 參數為 true 時才會根據 allow_self_signed 參數值來決定是否允許自簽名證書）。默認值為 FALSE
 ));
$mail->Host = "ssl://smtp.gmail.com:465";             //Gamil的SMTP主機
$mail->Port = 465;                                 //Gamil的SMTP主機的埠號(Gmail為465)。
$mail->CharSet = "utf-8";                       //郵件編碼
$mail->Username = "mymail@gmail.com"; //Gamil帳號
$mail->Password = "secret";
$mail->SetFrom('mymail@gmail.com', '我自己');                 //Gmail密碼
$mail->Subject ="測試主題"; //郵件標題
$mail->Body = "測試內容"; //郵件內容
$mail->IsHTML(true);                             //郵件內容為html
$mail->AddAddress("whereToSend@gmail.com");            //收件者郵件及名稱
if(!$mail->Send()){
  echo "Error: " . $mail->ErrorInfo;
}else{
  echo "Mail Send Succes";
}


?>
