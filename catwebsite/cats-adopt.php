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
    body {
      background-color: #ffffff;
      /* background-color:#FDF6EC ; */
    }


    
    section.cats-section {
      margin: 30px 0;
      /* border: none; */
    }

    .cats-section .cards {
      background-color: #D9D9D9;
      max-width: 300px;

      padding-top: 15px;
      margin: 10px 15px;
      /* border: none; */
    }

    .cats-section img {
      border-radius: 25px;
    }

    .cats-section .cards .card-body {
      background-color: #D9D9D9;
      border: none;
    }

    .cats-section .cards .btn-adopt {
      background-color: #D8B384;
      margin-top: 10px;
      padding: 10px 35px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1),
        /* 0 2px 6px rgb(48, 36, 36), */
        0 2px 1.1px rgb(44, 35, 35);
      font-size: 18px;
      font-weight: bold;
      font-family: 'Arial Arabic', sans-serif;
      color: #ffffff;

    }
  </style>
</head>

<body dir="rtl">
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-div">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-3" href="<?php echo $nav_login_url ?>"
                aria-current="page">
                <div class="rounded-circle d-flex justify-content-center align-items-center icon-user">
                  <i class="fa-solid fa-user text-white"></i>
                </div>
                <span class="profile-text">
                    <?php echo $nav_login ?>
                </span>
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
              <a class="nav-link" href="#">تبني القطط</a>
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

  <section class="filter-section container-fluid text-center my-5">

    <div class="input-group flex-nowrap">
      <label id="filter-cats-leable" for="filter-cats-select" class="input-group-text" id="addon-wrapping">
        <i class="fa-solid fa-filter"></i>
      </label>
      <!-- <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping"> -->
      <select class="breed-select" id="filter-cats-select">
        <option value="0">تصفية القطط</option>
        <option value="1">شيرازي</option>
        <option value="2">هيملايا</option>
        <option value="3">سامي</option>
        <option value="4">بلدي</option>
      </select>

    </div>

  </section>
  <section class="cats-section container-fluid text-center">
    <div class="row justify-content-center">
      <?php
          include 'db_pages/db_connect.php';
          $query = "SELECT * FROM cats where adopt_status = 0;";

          $result = $conn->query($query);

          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {

                echo '<div class="cards card rounded-4 col-8 col-sm-5 col-md-5 col-lg-3 d-flex justify-content-center">';
                echo '  <img src="assets/Media/AdoptsCats/'.$row["image_url"].'" class="card-img-top" alt="...">';
                echo '  <div class="card-body">';
                echo '    <h5 class="card-title">قطة '.$row["breed"].'</h5>';
                echo '    <p class="card-text"> نوع: '.$row["gender"].'</p>';
                echo '    <p class="card-text"> العمر: '.$row["age"].' </p>';
                echo '    <a href="details-adopt.php?id='.$row["cat_id"].'" class="btn btn-adopt">تبني</a>';
                echo '  </div>';
                echo '</div>';
              }
          } else {
              echo "<tr><td scope='col'>No Cats found.</td></tr>";
          }

          $conn->close();  
      ?>


    </div>
  </section>

  <footer class="footer">
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
              <i class="icon fa-solid fa-envelope" style="color: #000000;"></i>
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