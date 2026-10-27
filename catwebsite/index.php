<?php
session_start();
$nav_login='تسجيل الدخول';
$nav_login_url="login.php";
if(isset($_SESSION['user_id'])){
    $nav_login=$_SESSION['name'];
    $nav_login_url='db_pages/dp_logout.php';
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME - CAT HAVEN</title>
  <link rel="stylesheet" href="assets/Bootstrap&icons/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/Bootstrap&icons/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css?v=1.2.3" type="text/css" media="all">

  <style>
      body{
        background-color:#FDF6EC ;
      }
      .home-cat, .home-cat img{
          max-width: 500px ;
          max-height: 440px;
        }

      .btn-google-form {
        background-color: #FFB6B9;
        margin-top: 30px;
        padding: 15px 150px;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1),
                    0 2px 6px rgb(48, 36, 36),
                    0 2px 1.1px rgb(44, 35, 35);
        font-size: 18px;
        font-weight: bold;
        color: #ffffff;
      }
      .text-glow{
          text-shadow: 0 0 1px rgb(0, 0, 0), 
                      0 0 1.1px rgb(48, 36, 36),
                      0 0 1.1px rgb(44, 35, 35);
      }

      .section-title {
        display: inline-block;
        background-color: #fff;
        padding: 15px 100px;
        border-radius: 20px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        font-size: 24px;
        color: #000;
      }
      .about-text {
        background-color: #B5E7A7;
        padding: 15px 25px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        font-size: 20px;
      }
      .feature .cards{
      background-color: #D9ECFF;
      border: 1px solid #000;
      width: 300px;
      height: 400px;

      }
      .feature .cards img{
      width: 260px;
      height: 250px;
      }

      section.more .cards-img{
      max-width: 400px;
      max-height: 400px;
      }
      section.more .card-body{
      margin: 55px 30px;
      }

  </style>
</head>

<body dir="rtl" >
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-div">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-3" href="<?php echo $nav_login_url ?>" aria-current="page">
                  <div class="rounded-circle d-flex justify-content-center align-items-center icon-user">
                      <i class="fa-solid fa-user text-white"></i>
                  </div>
                  <span class="profile-text"><?php echo $nav_login ?></span>
              </a>
            </li>
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
  <section class="container-fluid text-center my-5">
    <div class="row bg-white p-3">
      <div class="col-7 home-cat">
        <img src="assets/img/home-cat.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-5 m-5">
        <div class="card-body">
            <h2 class="card-title my-5">مرحبًا بكِ في Cat Haven! 🐾</h2>
            <p class="card-text fw-bold">
              هنا حيث يبدأ شغفكِ بالقطط استكشفي سلالات القطط المختلفة وتبنى صديقك الجديد
            </p>
            <p class="card-text text-warning ">“ووفّري لها كل ما تحتاجه من مستلزمات عالية الجودة”</p>
            <p class="card-title fw-bold">
              هل تبحثين عن القط المثالي لكِ؟ استكملي استبياننا وسنساعدكِ في العثور على صديقك الفروي المناسب!
            </p>
            <a href="https://tinyurl.com/yc245y28" target="_blank" class="btn btn-google-form"><span class="text-glow">اضغط هنا</span></a>
        </div>
      </div>
    </div>
  </section>
  <section class="feature container-fluid text-center">
    <h1 class="mb-5 section-title">مميزات موقعنا</h1>
      <div class="row justify-content-around">
        <div class="cards rounded-4 col-8 col-sm-5 col-md-5 col-lg-3 d-flex justify-content-center mt-2" >
            <div class="content d-sm-block text-center mb-5 mx-5">
                <div class="service-card p-3">
                  <h3 class="mt-5 mb-2"> توصيل سريع</h3>
                  <img class="mt-2" src="assets/img/Fast-delivery.png" alt="icon">
                </div>
            </div>
        </div>
        <div class="cards rounded-4 col-8 col-sm-5 col-md-5 col-lg-3 d-flex justify-content-center mt-2" >
            <div class="content d-sm-block text-center mb-5 mx-5">
                <div class="service-card p-3">
                  <h3 class="mt-5 mb-2"> منتجات مميزة</h3>
                  <img class="mt-2" src="assets/img/Featured-Products.png" alt="icon">
                </div>
            </div>
        </div>
        <div class="cards rounded-4  col-8 col-sm-5 col-md-5 col-lg-3 d-flex justify-content-center mt-2">
            <div class="content d-sm-block text-center mb-5 mx-5">
                <div class="service-card p-3">
                  <h3 class="mt-5 mb-2"> رضاء العميل أولوية</h3>
                  <img class="mt-2" src="assets/img/priority.png" alt="icon" >
                </div>
            </div>
        </div>
      </div>
  </section>
  <section class="more container-fluid text-center my-5">
    <div class="row bg-white p-3 justify-content-around">
      <div class="col-6">
        <div class="card-body">
          <!-- <h2 class="card-title my-5">اختيار تراب ممتاز للقطط:</h2> -->
          <p class="card-text fw-bold fs-5">
            اختيار تراب ممتاز للقطط يمنحك بيئة نظيفة وخالية من الروائح، بفضل امتصاصه القوي وتكتله السريع الذي يسهل التنظيف. كما أنه مصنوع من مواد طبيعية آمنة، خالٍ من المواد الكيميائية الضارة.......           
          <a href="care.php">للمزيد من المعلومات</a>
          </p>
        </div>
      </div>
      <div class="cards-img col-6">
        <img src="assets/img/home-cat-2.png" class="img-fluid rounded-start" alt="...">
      </div>
    </div>
  </section>
  <section class="container-fluid text-center my-5">
    <h1 class="mb-5 section-title">ماذا نقدم</h1>
    <div class="row justify-content-around ">
      <div class="col-8 col-lg-3 mt-2 about-text">
          <a href="" class="btn px-5 text-white fw-bold">مستلزمات قطط</a>
      </div>
      <div class="col-8 col-lg-3 mt-2 about-text">
          <a href="" class="btn px-5 text-white fw-bold">تبني القطط</a>
      </div>
      <div class="col-8 col-lg-3 mt-2 about-text">
          <a href="" class="btn px-5 text-white fw-bold">وكيفية رعايتهم</a>
      </div>
    </div>
  </section>
  
  <footer class="footer" >
    <div class="container">
        <div class="row justify-content-evenly">
            <div class="main-col col-12 col-lg-2 col-md-4 col-sm-6 text-center">
                <h3 class="col text-glow">تابعنا على</h3>
                <div class="row justify-content-center">
                    <a class="col-2 link link-underline link-underline-opacity-0 hover" target="_blank" href="">
                        <i class="icon fa-brands fa-facebook" style="color: #376f9a;"></i>
                    </a>
                    <a class="col-2 link link-underline link-underline-opacity-0 hover" target="_blank" href="">
                        <i class="icon fa-brands fa-youtube" style="color: #e65151;"></i>
                    </a>
                    <a class="col-2 link link-underline link-underline-opacity-0 hover" target="_blank" href="">
                        <i class="icon fa-brands fa-instagram" style="color: #d72350;"></i>
                     </a>
                    <a class="col-2 link link-underline link-underline-opacity-0 hover" target="_blank" href="">
                        <i class="fa-brands fa-x-twitter" style="color: #000000;"></i>                        
                    </a>
                </div>
            </div>
            <div class="main-col col-12 col-lg-2 col-md-4 col-sm-6 text-center">
                <h3 id="connect-us" class="col text-glow">تواصل معنا</h3>
                <div class="row justify-content-center">
                    <a class="col link link-underline link-underline-opacity-0 hover" href="#">
                      <i class="icon fa-brands fa-whatsapp" style="color: #72c04b;"></i>
                    </a>
                    <a class="col link link-underline link-underline-opacity-0 hover" href="#">
                      <i class="icon fa-brands fa-telegram" style="color: #609ad6;"></i> 
                    </a>
                    <a class="col link link-underline link-underline-opacity-0 hover" href="">
                        <i class="icon fa-solid fa-envelope"  style="color: #000000;"></i> 
                    </a>
                </div>
            </div>

        </div>
    </div>
</footer>
  <!-- <script src="js/main.js"></script> -->
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