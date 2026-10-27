<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تسجيل الدخول - CAT HAVEN</title>
  <link rel="stylesheet" href="assets/Bootstrap&icons/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/Bootstrap&icons/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
   <style>
   </style>
</head>
<body dir="rtl">

  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-div">
      <div class="container-fluid">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a class="nav-link rounded-circle" aria-current="page" href="#">
                <i class="fa-solid fa-cart-shopping" style="color: #d3bb92;"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.php">الصفحة الرئيسة</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cats-adopt.php">تبني القطط</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">مستلزمات القطط</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="care.php">رعاية</a>
            </li>
            <li class="nav-item">
              <input class="form-control me-2" type="search" placeholder="البحث" aria-label="Search">
            </li>
          </ul>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-brand">
          <a class="navbar-brand" href="#">Cat Haven</a>
          <img class="navbar-brand" src="assets/img/logo-less-bg.png" alt="">
        </div>
        
      </div>
    </nav>
  </header>

  <section class="container-fluid text-center py-5" style="background-color: #FADADD;">
    <form action="db_pages/db_login.php" method="post">
      <div class="row justify-content-center mx-5 py-5">
        <a class="nav-link rounded-circle profile" style="background-color: #ffffff;" aria-current="page" href="#">
          <i class="fa-solid fa-user" style="color: #494343;"></i>
        </a>
      </div>
      <div class="row mx-5 py-3 justify-content-center">
            <input type="email" required class="form-control" placeholder="الأيميل" name="email">
      </div>
      <div class="row mx-5 pb-4 justify-content-center">
        <input type="password" required class="form-control" placeholder="كلمة السر" name="password">
      </div>
      <div class="row px-5 justify-content-center">
        <input type="submit" class="btn bg-info text-white fw-bold btn-login" value="تسجيل الدخول">
      </div>
      <div class="py-2">
        <span>ليس لدي حساب؟</span>
        <a href="signin.php">إنشاء حساب</a>
      </div>
    </form>
  </section>
  <script src="assets/Bootstrap&icons/js/bootstrap.bundle.min.js"></script>
  <script src="assets/Bootstrap&icons/js/all.min.js"></script>
</body>
</html>



<?php
    if(isset($_GET['suc'])){
      $suc=$_GET['suc'];
      echo'  <div class="toast-container position-fixed top-50 p-3">';
      echo'  <div id="liveToast" class="toast show bg-primary" role="alert" aria-live="assertive" aria-atomic="true">';
      echo'          <div class="toast-header">';
      echo'              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>';
      if($suc==='truesigin'){
          echo'               <p class="mt-2" role="alert">تم انشاء الحساب بنجاح سجل الدخول من فضلك</p>';
      }elseif ($suc==='truelogout') {
        echo'                 <p class="mt-2" role="alert">تم تسجيل الخروج</p>';
      }elseif ($suc==='falselogin') {
          echo'               <p class="mt-2" role="alert">البريد الإلكتروني أو كلمة المرور غير صحيحة. يرجى المحاولة مرة أخرى.</p>';
      }elseif ($suc==='falsesignin') {
          echo'               <p class="mt-2" role="alert">لم يتم انشاء الحساب حاول مرة اخرى</p>';
      }elseif ($suc==='firstLogIn') {
          echo'               <p class="mt-2" role="alert">سجل الدخول أولا لاكمال عملية التبني</p>';
      }elseif ($suc==='trueadoption') {
          echo'               <p class="mt-2" role="alert"> تمت عملية التبني بنجاح</p>';
      }elseif ($suc==='falseadoption') {
          echo'               <p class="mt-2" role="alert"> فشلت عملية التبني اعد المحاولة </p>';
      }
      echo'          </div>';
      echo'      </div>';
      echo'  </div>';
  }
?>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // تحقق مما إذا كانت الرسالة معروضة
      var toastElement = document.getElementById('liveToast');
      if (toastElement) {
        // قم بإزالة المعامل 'suc' من شريط العنوان بعد 0 ثوانٍ
        setTimeout(function () {
          var url = new URL(window.location.href);
          url.searchParams.delete('suc');
          window.history.replaceState({}, document.title, url.toString());
        }, 0); // 0 مللي ثانية (0 ثوانٍ)
      }
    });
  </script>