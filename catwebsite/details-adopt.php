<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php?suc=firstLogIn');
    exit();
}
$nav_login=$_SESSION['name'];
$nav_login_url='db_pages/dp_logout.php';

if(!isset($_GET['id'])){
    header('Location: cats-adopt.php');
    exit();
}
$cat_id =$_GET['id'];

include 'db_pages/db_connect.php';
$stmt = $conn->prepare("SELECT * FROM cats WHERE cat_id = ? AND adopt_status = 0 ;");
$stmt->bind_param("i", $cat_id);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $cat = $result->fetch_assoc();
    
    $cat_name= $cat['cat_name']; 
    $gender = $cat['gender'];
    $age = $cat['age'];
    $health = $cat['health'];
    $breed = $cat['breed'];
    $description = $cat['description'];
    $image_url = $cat['image_url'];


} else {
    throw new Exception("لم يتم العثور على القطة");
}
$stmt->close();
$conn->close();

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
            background-color:
                        <?php 
                    switch($gender) {
                        case 'ذكر': echo '#A7C7E7'; break;
                        case 'انثى': echo '#FADADD'; break;
                        default: echo '#ffffff';
                    }
                    ?>;
            /* background-color: #ffffff; */
            /* background-color:#FADADD ; */
            /* background-color: #A7C7E7; */
        }

        section.section-details-adopt .div-card-details {
            padding: 25px 15px;
            background-color: #FCF2E6;
            border-radius: 20px;
        }

        section.section-details-adopt .div-card-details .details-container {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 50px 10px;
            margin: 15px;
            width: 850px;
            height: 350px;
            text-align: start;

        }

        section.section-details-adopt .div-card-details .img-container img {
            border-radius: 20px;
            padding: 10px;;
            max-width: 300px;
            max-height: 300px;
        }

        section.section-details-adopt .div-btn-back a {
            background-color: #D8B384;
            color: white;
        }

        section.section-details-adopt .btn-adopt {
            background-color: #D8B384;
            margin-top: 10px;
            padding: 8px 35px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1),
                /* 0 2px 6px rgb(48, 36, 36), */
                0 2px 1.1px rgb(44, 35, 35);
            font-size: 18px;
            font-weight: bold;
            font-family: 'Arial Arabic', sans-serif;
            color: #ffffff;

        }
        section.section-details-adopt a.btn-care{
            text-decoration: none;
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.1),
                /* 0 2px 6px rgb(48, 36, 36), */
                0 2px 1.1px rgb(44, 35, 35);
            font-size: 18px;
            font-weight: bold;
            /* font-family: 'Arial Arabic', sans-serif; */
            color: #998686;

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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-brand">
                    <a class="navbar-brand" href="#">Cat Haven</a>
                    <img class="navbar-brand" src="assets/img/logo-less-bg.png" alt="">
                </div>

            </div>
        </nav>
    </header>

    <section class="section-details-adopt container-fluid my-5">
        <div class="div-btn-back">
            <a href="cats-adopt.php" class="btn rounded-circle text-left">
                <i class="fa-solid fa-right-long"></i>
            </a>
        </div>


        <div class="div-card-details container-fluid text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-3 img-container">
                    <img class="img-fluid" src="assets/Media/AdoptsCats/<?php echo $image_url; ?>" alt="">
                </div>
                <div class="col-8 details-container">
                    <div class="row">
                        <div class="col-6">
                            <h4>معلمومات القط</h4>
                            <p>
                                الاسم: <?php echo $cat_name; ?>

                            </p>
                            <p>
                                الجنس : <?php echo $gender; ?>
                            </p>
                            <p>
                                العمر : <?php echo $age; ?>
                            </p>
                            <p>
                                صحة القط : <?php echo $health; ?>
                            </p>

                        </div>
                        <div class="col-6">
                            <h4>
                                قط <?php echo $breed; ?>
                            </h4>
                            <p>
                            <?php echo $description; ?>
                            </p>
                        </div>
                        <div class="col-12 row align-items-end">
                            <div class="col-6 text-center ">
                                <a href="care.php" class="btn-care">
                                        كيفية رعية القطط...
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="db_pages/db_process_adopt.php?cat_id=<?php echo $cat_id; ?>" class="btn btn-adopt">
                                    تبني
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
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