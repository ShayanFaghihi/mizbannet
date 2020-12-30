<?php 
   include "include/contact_form.php";
?>
<?php include "header.php"; ?>
<title>تماس با میزبان نت</title>
<meta name="description" content="">
<link rel="canonical" href="https://mizbannet.com/contact">
<meta property="og:local" content="fa_IR">
<meta property="og:title" content="تماس با میزبان نت" />
<meta property="og:url" content="https://mizbannet.com/contact" />
<meta property="og:type" content="company" />
<meta property="og:description" content="" />
<meta property="og:site_name" content="میزبان نت | Mizbannet">
<meta property="og:image" content="https://mizbannet.com/vendors/images/index-og-image.jpg" />

<?php include "menu.php"; ?>

<section id="header" class="contact-header u-bg-blue-light u-text-align-center">
    <div class="container">
        <h1 class="contact-header__title u-margin-bottom-large">با ما در تماس باشید</h1>
        <p class="contact-header__text">اگر در مسیر خرید یا راه‌اندازی وب سایت خود، به مساله‌ای برخوردید، می‌توانید با ما در تماس باشید؛ همچنین کارشناسان فنی ما آماده پاسخگویی به مشکلات فنی شما هستند.</p>
        <div class="contact-header__cta">
            <a href="../index.php" class="btn btn-red">صفحه اصلی</a>
            <a href="#contact" class="btn btn-transparent">تماس با ما</a>
        </div>
   </div>
   
</section>
<main>
    <section class="contact-boxes u-bg-grey u-text-align-center">
        <h2 class="heading-secondary u-margin-bottom-large">ارتباط با ما</h2>
        <div class="container row">
            <div class="contact-box u-margin-bottom-large">
                <img src="vendors/images/icon/Ticketing.png" alt="ارسال تیکت پشتیبانی خرید هاست از میزبان نت" class="contact-box__img">
                <h3 class="heading-tertiary">ارسال تیکت</h3>
                <ul class="contact-box__list">
                    <li><a href="mailto:support@mizbannet.com" class="contact-box__link"><i class="far fa-envelope contact-box__icon"></i>support[at]mizbannet.com</a></li>
                    <li><a href="https://client.mizbannet.com/submitticket.php" class="contact-box__link"><i class="fas fa-headset contact-box__icon"></i>ارسال تیکت پشتیبانی</a></li>
                </ul>
                
                
            </div>
            <div class="contact-box">
                <img src="vendors/images/icon/Online-Chat.png" alt="چت آنلاین پشتیبانی خرید هاست میزبان نت" class="contact-box__img">
                <h3 class="heading-tertiary"> چت آنلاین</h3>
                <ul class="contact-box__list">
                    <li><a href="mailto:support@mizbannet.com" class="contact-box__link"><i class="far fa-envelope contact-box__icon"></i>support[at]mizbannet.com</a></li>
                    <li><a href="" class="contact-box__link"><i class="fas fa-headset contact-box__icon"></i>ارتباط مستقیم با میزبان نت</a></li>
                </ul>
                
            </div>
        </div>
    </section>
    <section class="contact-form u-bg-white u-text-align-center">
        <p class="contact-form__text">با ما در ارتباط باشید و سوالات خود را از ما بپرسید</p>
        <h2 class="contact-form__title line--medium u-margin-bottom-large">تماس با ما</h2>
        <form action="" method="post">
            <input class="contact-form__field" type="text" name="name" placeholder="نام " required>
            <input class="contact-form__field" type="email" name="email" placeholder="ایمیل" required>
            <input class="contact-form__field" type="text" name="phone" placeholder="شماره تماس" required>
            <textarea class="contact-form__textarea" name="message" placeholder="پیغام خود را بنویسید..." required></textarea>
            <input type="submit" class="contact-form__btn" name="submit" value="ارسال پیام">
            <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LeytMsZAAAAAHKffF0_E_ZVd4BiWG2pavvbDQUB"></div>
            <?php if($_SERVER["REQUEST_METHOD"] == 'POST') {
                echo $message;
            } else {
                echo "";
            } ?>
        </form>
    </section>
</main>
<script src="https://www.google.com/recaptcha/api.js"></script>
<?php include "footer.php" ?>