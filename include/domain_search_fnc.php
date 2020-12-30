<?php session_start(); ?>
<?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $domain = strip_tags(trim($_POST["domain"]));
            $domain = str_replace(array("\r","\n"),array(" "," "),$domain);
            if ( gethostbyname($domain) != $domain ) {
                $_SESSION['message'] = "<h3 class='fail'>" . $domain . " قبلا ثبت شده است </h3>";
               
            }
            else {
                $_SESSION['message'] =  "<h3 class='success'> هوراا! دامنه ". $domain ." آزاد است. برای سفارش <a href='#'>اینجا کلیک کنید</a> </h3>";
    
            }
        }
    ?>