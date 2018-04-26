 使用的PHP Mailer版本是6.0.1.
## 這是PHPMailer的示範用文件 作為筆記用
一般使用PHPMailer連接SMTP有可能會connection fail.
是因為沒有加上這幾行.

```
$mail->SMTPOptions = array(
   'ssl' => array(
     'verify_peer' => false,          //是否需要驗證SSL證書。默認值為FALSE
     'verify_peer_name' => false,        //需要驗證對等名稱.默認值為 TRUE.
     'allow_self_signed' => true             // 是否允許自簽名證書。需要配合 verify_peer 參數使用（注：當 verify_peer 參數為 true 時才會根據 allow_self_signed 參數值來決定是否允許自簽名證書）。默認值為 FALSE
 ));
```
這些是SSL的驗證選項.
