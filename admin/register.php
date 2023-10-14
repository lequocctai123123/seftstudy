<?php

include '../components/connect.php';

if(isset($_POST['submit'])){

   $id = unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $profession = $_POST['profession'];
   $profession = filter_var($profession, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $ext = pathinfo($image, PATHINFO_EXTENSION);
   $rename = unique_id().'.'.$ext;
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = '../uploaded_files/'.$rename;

   $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE email = ?");
   $select_tutor->execute([$email]);
   
   if($select_tutor->rowCount() > 0){
      $message[] = 'email already taken!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm passowrd not matched!';
      }else{
         $insert_tutor = $conn->prepare("INSERT INTO `tutors`(id, name, profession, email, password, image) VALUES(?,?,?,?,?,?)");
         $insert_tutor->execute([$id, $name, $profession, $email, $cpass, $rename]);
         move_uploaded_file($image_tmp_name, $image_folder);
         $message[] = 'new tutor registered! please login now';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ĐĂNG KÝ GIA SƯ</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body style="padding-left: 0;">

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message form">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<!-- register section starts  -->

<section class="form-container">

   <form class="register" action="" method="post" enctype="multipart/form-data">
      <h3>Đăng ký (GIÁO VIÊN)</h3>
      <div class="flex">
         <div class="col">
            <p>Tên <span>*</span></p>
            <input type="text" name="name" placeholder="...." maxlength="50" required class="box">
            <p>Nghề của bạn <span>*</span></p>
            <select name="profession" class="box" required>
               <option value="" disabled selected>-- Lựa chọn</option>
               <option value="developer">Lập trình viên</option>
               <option value="desginer">Thiết kế</option>
               <option value="musician">Nhạc sĩ</option>
               <option value="biologist">Nhà sinh vật học</option>
               <option value="teacher">Giáo viên</option>
               <option value="engineer">Kỹ sư</option>
               <option value="lawyer">Luật sư</option>
               <option value="accountant">Kế toán</option>
               <option value="doctor">Bác sĩ</option>
               <option value="journalist">Nhà báo</option>
               <option value="photographer">Nhiếp ảnh</option>
            </select>
            <p>Email <span>*</span></p>
            <input type="email" name="email" placeholder="....." maxlength="20" required class="box">
         </div>
         <div class="col">
            <p>Mật khẩu <span>*</span></p>
            <input type="password" name="pass" placeholder="...." maxlength="20" required class="box">
            <p>Xác nhận mật khẩu <span>*</span></p>
            <input type="password" name="cpass" placeholder="...." maxlength="20" required class="box">
            <p>Hình đại diện <span>*</span></p>
            <input type="file" name="image" accept="image/*" required class="box">
         </div>
      </div>
      <p class="link">Bạn đã có tài khoản? <a href="login.php">ĐĂNG NHẬP NGAY !</a></p>
      <input type="submit" name="submit" value="Đăng ký" class="btn">
   </form>

</section>

<!-- registe section ends -->












<script>

let darkMode = localStorage.getItem('dark-mode');
let body = document.body;

const enabelDarkMode = () =>{
   body.classList.add('dark');
   localStorage.setItem('dark-mode', 'enabled');
}

const disableDarkMode = () =>{
   body.classList.remove('dark');
   localStorage.setItem('dark-mode', 'disabled');
}

if(darkMode === 'enabled'){
   enabelDarkMode();
}else{
   disableDarkMode();
}

</script>
   
</body>
</html>