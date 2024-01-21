<?php
  include('./dbConnection.php');
  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
?>  
   <!-- Start Video Background-->
    <div class="container-fluid remove-vid-marg">
      <div class="vid-parent">
        <video playsinline autoplay muted loop>
          <source src="video/vid1.mp4" />
        </video>
        <div class="vid-overlay"></div>
      </div>
      <div class="vid-content" >
        <h1 class="my-content">গুৱাহাটী বিশ্ববিদ্যালয়লৈ স্বাগতম</h1>
        <small class="my-content">Looking Ahead</small><br />
        <?php    
              if(!isset($_SESSION['is_login'])){
                echo '<a class="btn btn-danger mt-3" href="#" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
              } else {
                echo '<a class="btn btn-primary mt-3" href="student/studentProfile.php">My Profile</a>';
              }
          ?> 
       
      </div>
    </div> <!-- End Video Background -->


    <div><br>
      <button type="button" class="btn btn-outline-success btn-lg btn-block"><a href="https://surveyheart.com/form/63934b97851d7d342f42766d">Give Your Attendance Here</a></button>
    </div>
    
    
    
    <div class="container mt-5"> <!-- Start Most Popular Course -->
      <h1 class="text-center">Available Courses</h1>
      <div class="card-deck mt-4"> <!-- Start Most Popular Course 1st Card Deck -->
        <?php
        $sql = "SELECT * FROM course LIMIT 3";
        $result = $conn->query($sql);
        if($result->num_rows > 0){ 
          while($row = $result->fetch_assoc()){
            $course_id = $row['course_id'];
            echo '
            <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
              <div class="card">
                <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                <div class="card-body">
                  <h5 class="card-title">'.$row['course_name'].'</h5>
                  <p class="card-text">'.$row['course_desc'].'</p>
                </div>
                <div class="card-footer">
                  <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                </div>
              </div>
            </a>  ';
          }
        }
        ?>   
      </div>  <!-- End Most Popular Course 1st Card Deck -->   
      <div class="card-deck mt-4"> <!-- Start Most Popular Course 2nd Card Deck -->
        <?php
          $sql = "SELECT * FROM course LIMIT 3,3";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              $course_id = $row['course_id'];
              echo '
                <a href="coursedetails.php?course_id='.$course_id.'"  class="btn" style="text-align: left; padding:0px;">
                  <div class="card">
                    <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                    <div class="card-body">
                      <h5 class="card-title">'.$row['course_name'].'</h5>
                      <p class="card-text">'.$row['course_desc'].'</p>
                    </div>
                    <div class="card-footer">
                      <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                    </div>
                  </div>
                </a>  ';
            }
          }
        ?>
      </div>   <!-- End Most Popular Course 2nd Card Deck --> 
      <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="courses.php">View All Course</a> 
      </div>
    </div>  <!-- End Most Popular Course -->
    <div>
      <br>
      <br>
      <h1><center>Calender Events</center></h1>
    </div>
    
    <div class="iframe-container">
      <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FKolkata&src=cHJvamVjdGd1OEBnbWFpbC5jb20&src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%230B8043" style="border:none;" width="200" height="300" frameborder="0" scrolling="no"></iframe>
    </div>
    <div>
      <br>
      <br>
      <br>
      <div>
      <h1><center><p>
      Gauhati University Map
      </p></center></h1>
    </div>
    
    <div class="iframe-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.309779438478!2d91.6607781142004!3d26.15403888346022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a44c762f12a67%3A0x95386a0503457611!2sGauhati%20University!5e0!3m2!1sen!2sin!4v1670540418580!5m2!1sen!2sin" width="500px" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div>
      <br>
      <br>
      <br>
      <h1><center>GU Notice Board</center></h1>
    </div>
    
    <div class="iframe-container">
      <iframe src="https://gunoticeboard.000webhostapp.com" style="border:none;" width="100%" height="500px" frameborder="0"></iframe>
    </div>
    <style>
  .iframe-container {
    text-align:center;
      width:100%;
  }
</style>
<br>


    <?php 
    // Contact Us
    include('./contact.php'); 
    ?>  

     <!-- Start Students Testimonial -->
      <div class="container-fluid mt-5" style="background-color: #4B7289" id="Feedback">
        <h1 class="text-center testyheading p-4"> About Us </h1>
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
            <?php 
              $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
              $result = $conn->query($sql);
              if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                  $s_img = $row['stu_img'];
                  $n_img = str_replace('../','',$s_img)
            ?>
              <div class="testimonial">
                <p class="description">
                <?php echo $row['f_content'];?>  
                </p>
                <div class="pic">
                  <img src="<?php echo $n_img; ?>" alt=""/>
                </div>
                <div class="testimonial-prof">
                  <h4><?php echo $row['stu_name']; ?></h4>
                  <small><?php echo $row['stu_occ']; ?></small>
                </div>
              </div>
              <?php }} ?>
            </div>
          </div>
        </div>
    </div>  <!-- End Students Testimonial -->

    <div class="container-fluid bg-danger"> 
        <div class="row text-white text-center p-1">
              <p>Gauhati University, also known as GU, is a collegiate public state university located in Guwahati, Assam, India. It was established on 26 January 1948 under the provisions of an Act enacted by the Assam Legislative Assembly. It is the oldest university in Northeast India.</p>
              <p>It is accredited grade "A" by National Assessment and Accreditation Council.[3] Starting with 18 affiliated colleges and 8 Post Graduate Departments in 1948, Gauhati University, today, has 39 Post Graduate Departments, besides IDOL (Institute of Distance and Open Learning), a constituent Law and Engineering College. It has 341 affiliated colleges offering undergraduate and post graduate courses in the faculties of Arts, Science, Commerce, Law, Medicine, Engineering and Technology. Gauhati University is a member of the Association of Indian Universities and the Association of Commonwealth Universities.</p>
        </div>
    </div> 

    <!-- Start About Section -->
    <div class="container-fluid p-4" style="background-color:#E9ECEF">
      <div class="container" style="background-color:#E9ECEF">
        <div class="row text-center">
          <div class="col-sm">
            <h5>Category</h5>
            <a class="text-dark" href="#">Arts</a><br />
            <a class="text-dark" href="#">Commerce</a><br />
            <a class="text-dark" href="#">Science</a><br />
            <a class="text-dark" href="#">Technology</a><br />
            <a class="text-dark" href="#">Law</a><br />
            <a class="text-dark" href="#">Medicine</a><br />
          </div>
          <div class="col-sm">
            <h5>Contact Us</h5>
            <p>e-Gauhati University<br>Gopinath Bordoloi Nagar<br> Jalukabari,Assam <br> 781014 </p>
          </div>
        </div>
      </div>
    </div> <!-- End About Section -->
  <?php 
    // Footer Include from mainInclude 
    include('./mainInclude/footer.php'); 
    
  ?>  
