<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/dp_close.php';
include_once './parts/header.php';
?>

<img src="img/rayan.png">
    <div class="p-4 p-md-5 mb-4 text-black rounded">
    <div class="col-md-6 px-0"><br>
      <h1 class="display-4 fw-normal">مسابقة</h1><br>
      <p class="lead fw-normal">باقي على فتح التسجيل</p><br>
      <h3 id="countdown"></h3><br>
    </div>
    
<h3 class="title">يرجى إدخال معلوماتك في الأسفل</h3><br>
    <ul class="list-group list-group-flush">
  <li class="list-group-item">للتسجيل في المسابقة</li>
  <li class="list-group-item">يشترط ان تكون طالبا في الكلية التقنية</li>
  <li class="list-group-item">عمل الطالب : ريان مطر الغامدي</li>
</ul>    </div>
<div class="container">

<div class="position-relative text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" >
  <h3>الرجاء تسجيل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>
  <!---->
  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>
<!---->
 <div class="mb-3">
    <label for="email" class="form-label">البريد الإلكتروني</label>
    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div> 
  <br>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" require>
    <label class="form-check-label" for="exampleCheck1">اضغط هنا لتأكيد معلوماتك</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">تسجيل</button>
  </div>
  
</form>
    </div>



</div>

<div class="loader-con">
    <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
<div class="button-wrapper">
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-4 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary">
إختيار الرابح
</button>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstname']) . ' ' . htmlspecialchars($user['lastname']);?></h1>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
  <?php include_once './parts/footer.php'; ?>