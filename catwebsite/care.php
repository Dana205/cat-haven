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
section.care .care-title {
  background-color: #FFD2CB;
  padding: 15px 100px;
  box-shadow: 0 2px 6px rgba(58, 5, 5, 0.5);
  font-size: 30px;
  color: #ffffff;
}
section.care .details-care br {
  padding-bottom:70px ;
}
section.care .details-care .details-title{
  margin:70px 0 20px 0 ;
}
section.care .details-care .details-body, section.care .details-care li{
  margin:10px 0 ;
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
  <section class="care container-fluid text-center my-5">
    <h1 class="mb-5 care-title">رعايةالقطط</h1>
    <div class="details-care bg-white p-3">
        <h2 class="details-title">اكل القطط:</h2>
        <p class="details-body">عد التغذية السليمة عنصرًا أساسيًا للحفاظ على صحة القطط ونشاطها اليومي، وتشمل:</p>
        <ul>
          <li>البروتينات 🥩: أساسية لنمو العضلات والطاقة، ويفضل أن تكون من مصادر حيوانية مثل اللحوم والدجاج والأسماك.</li>
          <li>الدهون الصحية 🥑: توفر طاقة ضرورية وتساعد في الحفاظ على لمعان الفراء وصحة الجلد.</li>
          <li>الفيتامينات والمعادن 🍎: ضرورية لتقوية المناعة ودعم وظائف الجسم المختلفة، مثل الكالسيوم لصحة العظام.</li>
          <li>التوازن بين الدراي فود والويت فود 🍖: يضمن ترطيب الجسم وصحة الأسنان.</li>
          <li>تجنب الأطعمة الضارة 🚫: مثل البصل، الثوم، الشوكولاتة، والعظام الصغيرة التي قد تسبب مشاكل صحية.</li>
          <li>تقديم وجبات منتظمة ⏳: بكميات مناسبة حسب عمر القطة ونشاطها.</li>
          <li>توفير مياه نظيفة دائمًا 💦: ضرورية لمنع الجفاف وتعزيز صحة الكلى.</li>
        </ul>

        <h2 class="details-title">اللتر بوكس ونظافة القط:</h2>
        <p class="details-body">
          تنظيف الليتر بوكس يوميًا 🗑️: لإزالة الكتل والفضلات ومنع انتشار الروائح الكريهة.
        </p>
        <p class="details-body">
          تغيير الرمل بانتظام 🔄: مرة أو مرتين في الأسبوع للحفاظ على بيئة نظيفة وصحية.
        </p>
        <p class="details-body">
          اختيار رمل عالي الجودة 🏖️: يُفضل أن يكون قليل الغبار وسريع التكتل لتسهيل التنظيف وتقليل الفوضى.
        </p>
        <p class="details-body">
          تنظيف فراء القطة بالفرشاة 🐱: يوميًا أو أسبوعيًا حسب نوع الفراء، مما يساعد في تقليل تساقط الشعر وتجنب تكوّن الكرات الشعرية.
        </p>

        <h2 class="details-title">اللعب مع القط :</h2>
        <p class="details-body">
          اللعب مع القطط ليس مجرد تسلية، بل هو جزء أساسي من رعايتها، حيث يساعدها على البقاء نشيطة وسعيدة.
        </p>
        <ul>
          <li>
            اللعب مع القطط ليس مجرد تسلية، بل هو جزء أساسي من رعايتها، حيث يساعدها على البقاء نشيطة وسعيدة.
          </li>
          <li>
            تحفيز الغريزة الطبيعية 🐭: استخدام ألعاب تحاكي الفريسة مثل العصي ذات الريش أو الكرات المتحركة.
          </li>
          <li>
            تعزيز النشاط البدني 🏃‍♂️: اللعب يساعد على منع السمنة ويحافظ على صحة المفاصل والعضلات.
          </li>
          <li>
            تقوية العلاقة بين القطة وصاحبها ❤️: قضاء وقت ممتع مع القطة يعزز الثقة والارتباط العاطفي.
          </li>
          <li>
            تقليل التوتر والملل 😺: اللعب يحدّ من السلوكيات التخريبية مثل الخدش أو العض نتيجة الملل.
          </li>
          <li>
            استخدام ألعاب تفاعلية 🎮: مثل الليزر أو الألغاز التي تحتوي على مكافآت لتحفيز الذكاء.          </li>
        </ul>
        <br>
        <br>
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
          echo'                 <p class="mt-2" role="alert">تم تسجيل الخروج/p>';
        }elseif ($suc==='falselogin') {
            echo'               <p class="mt-2" role="alert">البريد الإلكتروني أو كلمة المرور غير صحيحة. يرجى المحاولة مرة أخرى.</p>';
        }elseif ($suc==='falsesignin') {
            echo'               <p class="mt-2" role="alert">لم يتم انشاء الحساب حاول مرة اخرى</p>';
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