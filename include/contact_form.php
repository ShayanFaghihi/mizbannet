<?php 
   
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
                
    // Load Composer's autoloader
    require 'vendor/autoload.php';
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);


    // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'support@mizbannet.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'support@mizbannet.com';                     // SMTP username
    $mail->Password   = 'jI?UQ.))85MJ';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 20;

 if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Recaptcha
    $recaptcha = $_POST['g-recaptcha-response'];
    $res = reCaptcha($recaptcha);
    if(!$res['success']){
    // Error
    echo "Please Verify!";
    }

    function reCaptcha($recaptcha){
        $secret = "6LeytMsZAAAAAINw949hzOIGphhThSfORnemWp-8";
        $ip = $_SERVER['REMOTE_ADDR'];
      
        $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        $data = curl_exec($ch);
        curl_close($ch);
      
        return json_decode($data, true);
      }

      $name = trim(strip_tags($_POST['name']));
      $email = trim(strip_tags($_POST['email']));
      $phone = trim(strip_tags($_POST['phone']));
      $message = trim(strip_tags($_POST['message']));

      

      // SMTP CONFIG
       //Recipients
       $mail->setFrom('info@cms.com', 'Faghihi');
       $mail->addAddress($email, 'User');     // Add a recipient


       // Content
       $mail->isHTML(true);                                  // Set email format to HTML
       $mail->Subject = 'Password Recovery';
       $mail->Body    = "پیام پشتیبانی از طرف $name با آدرس $email و شماره تماس $phone دارید";
       if($mail->send()) {
           
         $message = "<div class='alert alert-success'>پیغام شما با موفقیت ارسال شد! به زودی با شما تماس خواهیم گرفت.</div>";

       } else {
         $message = "<div class='alert alert-danger'>مشکلی پیش آمده است! لطفا دوباره تلاش کنید.</div>";
       }
}
?>