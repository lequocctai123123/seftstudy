<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Vì sao nên chọn Educa.?</h3>
         <p>Educa là một nền tảng giáo dục trực tuyến độc đáo, mang đến cho học sinh và giáo viên trải nghiệm học tập tương tác và linh hoạt. Chúng tôi cam kết cung cấp chất lượng giáo dục cao cấp thông qua nhiều khóa học đa dạng và công nghệ tiên tiến. Hãy tham gia Educa để khám phá sự phát triển và thành công trong học tập của bạn!</p>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>300+</h3>
            <span>Khóa học</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>500+</h3>
            <span>Học sinh , sinh viên</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>200+</h3>
            <span>Gia sư</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>Công việc</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">Đánh giá của sinh viên / học sinh</h1>

   <div class="box-container">

      <div class="box">
         <p>Educa là một trang web học trực tuyến tuyệt vời! Giao diện thân thiện và dễ sử dụng giúp tôi dễ dàng tiếp cận nhiều khóa học chất lượng.</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Đỗ Văn Tuấn</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Tôi rất ấn tượng với sự đa dạng của nội dung học tập trên Educa. Từ khoá học khoa học đến nghệ thuật, đây là một tài nguyên giáo dục đa dạng cho mọi người.</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Lê Văn Luyện</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Educa có đội ngũ giảng viên xuất sắc. Tôi đã học từ những người có kiến thức sâu rộng và khả năng giảng dạy xuất sắc.</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Trần Hà My</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Educa có đội ngũ giảng viên xuất sắc. Tôi đã học từ những người có kiến thức sâu rộng và khả năng giảng dạy xuất sắc.</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Huỳnh Văn Tâm</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Tôi rất hài lòng với khả năng theo dõi tiến trình học tập và thực hành qua bài kiểm tra và bài tập trên Educa.</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Lê Văn Sỹ</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Educa không chỉ là nơi học tập, mà còn là cộng đồng giáo dục tuyệt vời. Tôi đã tìm thấy sự hỗ trợ và đồng cảm từ cộng đồng này.</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Trương Thế Minh</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>