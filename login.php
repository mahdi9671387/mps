<?php
include("hed.html");
?>
  <main>
    <section class="login-container">
      <h2>ورود / ثبت نام</h2>
      <p>برای ورود یا ساخت حساب جدید، اطلاعات خود را وارد کنید</p>

      <form action="#" method="post" class="login-form">
        <label for="username">نام کاربری یا ایمیل:</label>
        <input type="text" id="username" name="username" placeholder="نام کاربری یا ایمیل">

        <label for="password">رمز عبور:</label>
        <input type="password" id="password" name="password" placeholder="رمز عبور">

        <button type="submit" class="btn-login">ورود</button>

        <p class="or">یا</p>

        <button type="button" class="btn-register">ثبت نام</button>

        <p class="contact">📞 پشتیبانی: <a href="tel:09034598244">۰۹۰۳۴۵۹۸۲۴۴</a></p>
      </form>
    </section>
  </main>

 
 <?php
 include("fot.html");
 ?>