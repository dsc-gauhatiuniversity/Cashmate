<?php
  include('./dbConnection.php');
  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
?>  
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./image/pic1.jpg" alt="First slide" style="height:500px; width:100%; object-fit:cover";>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/pic4.jpg" alt="Second slide" style="height:500px;width:100%; object-fit:cover";>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/pic5.jpg" alt="Third slide" style="height:500px; width:100%; object-fit:cover";>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/pic6.jpg" alt="Fourth slide" style="height:500px; width:100%; object-fit:cover";>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/pic7.png" alt="Fifth slide" style="height:500px; width:100%; object-fit:cover";>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/pic2.jpg" alt="Sixth slide" style="height:500px;width:100%; object-fit:cover";>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/pic3.jpg" alt="Seventh slide" style="height:500px; width:100%; object-fit:cover";>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




    <div class="container mt-5"> <!-- Start All Course -->
      <h1 class="text-center">All Courses</h1>
      <div class="row mt-4"> <!-- Start All Course Row -->
      <?php
          $sql = "SELECT * FROM course";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              $course_id = $row['course_id'];
              echo ' 
                <div class="col-sm-4 mb-4">
                  <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px;"><div class="card">
                    <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                    <div class="card-body">
                      <h5 class="card-title">'.$row['course_name'].'</h5>
                      <p class="card-text">'.$row['course_desc'].'</p>
                    </div>
                    <div class="card-footer">
                      <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                    </div>
                  </div> </a>
                </div>
              ';
            }
          }
        ?> 
        </div><!-- End All Course Row -->   
      </div><!-- End All Course -->   
     
<?php 
  // Contact Us
  include('./contact.php'); 
?> 

<?php 
  // Footer Include from mainInclude 
  include('./mainInclude/footer.php'); 
?>  
