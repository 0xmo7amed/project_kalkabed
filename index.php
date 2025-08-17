<?php 
include './inc/db.php';  // ربط الملف الخارجي ال فيه الحاجات المهمه
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>
<!DOCTYPE html>
<html lang="en" dir = "rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" >
        <link rel="stylesheet" href="./css/style.css">
</head>

<body>
                <div class="container">
            <h1 class="display-4 fw-normal">اربح مع مو</h1>
            <p class="lead fw-normal">باقي علي فتح التسجيل</p>
            <h3 id="countdown"></h3>
            <p class="lead fw-normal"> للسحب علي ربح نسخه مجانية من برنامج </p>
            <h3>للدخول فالسحب اتبع ما يلي: </h3>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">تابع البث المباشر علي صفحتي علي فيسبوك بالتاريخ المذكور اعلاه </li>
            <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عباره عن اسئلة وأجوبه حرة للجميع </li>
            <li class="list-group-item">خلال فترة الساعه سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايملك</li>
            <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة االبيانات بشكل عشوائي </li>
            <li class="list-group-item">الرابح سيحصل علي نسخة مجانية من برنامج البرنامج</li>
            </ul>
</div>



            <div class="position-relative text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                 <form  action ="index.php" method = "POST">
                     <h3>الرجاء ادخل معلوماتك</h3>
                        <div class="mb-3">
                            <label for="firstName" class="form-label">الاسم الاول</label>
                            <input type="text" name="firstName" class="form-control" id="firstName" value ="<?php echo $firstname?>">
                            <div class="form-text error"><?php echo $errors['firstNameError']?></div>
                        </div>

                        <div class="mb-3">
                            <label for="lastName" class="form-label">الاسم الاخير</label>
                            <input type="text" name="lastName" class="form-control" id="lastName" value ="<?php echo $lastname?>">
                            <div class="form-text error"><?php echo $errors['lastNameError']?></div>
                        </div>

                        <div class="mb-3">
                            <label for="Email1" class="form-label">البريد الالكتروني</label>
                            <input type="text" name="email" class="form-control" id="Email1" value ="<?php echo $email?>">
                            <div class="form-text error"><?php echo $errors['emailError']?></div>
                        </div>

  <button type="submit" name ="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
        </div>
        </div>        
<!-- Button trigger modal -->
    <div class= "d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id = "winner" class="btn btn-primary">
اختيار الرابح
</button>
    </div>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach($users as $user):?>
            <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstname']) . ' ' . htmlspecialchars($user['lastname']);?></h1>            
        <?php endforeach;?> 
      </div>

    </div>
  </div>
</div>

            <script src="./js/bootstrap.bundle.min.js"></script>
            <script src="./js/script.js"></script>
</body>

</html>